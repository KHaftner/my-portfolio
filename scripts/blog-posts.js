const apiUrl = "https://www.khaftner.ca/kassies-blog/wp-json/wp/v2/posts?_embed&per_page=5";

document.addEventListener("DOMContentLoaded", function() {

    fetch(apiUrl)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(posts => {

                // Extract all unique author IDs
                const authorIds = [...new Set(posts.map(post => post.author))];
        
                // Fetch authors' details
                const authorPromises = authorIds.map(id => fetch(`https://www.khaftner.ca/kassies-blog/wp-json/wp/v2/users/${id}`).then(resp => resp.json()));
        
                return Promise.all(authorPromises).then(authors => {
                    // Convert array of authors to an object for easier lookup
                    const authorLookup = authors.reduce((acc, author) => {
                        acc[author.id] = author.name;
                        return acc;
                    }, {});
        
                    return { posts, authorLookup };
                });
            })
            .then(({ posts, authorLookup }) => {
                const container = document.querySelector('.blog-content'); // Select the section by its class
    
            posts.forEach(post => {
                // Create post container
                const postSection = document.createElement('section');
                postSection.className = "post";
    
                // Add post title
                const title = document.createElement('h2');
                title.innerHTML = post.title.rendered;
                postSection.appendChild(title);

                // Author Name
                const authorElem = document.createElement('p');
                authorElem.innerText = `Author: ${authorLookup[post.author]}`;
                postSection.appendChild(authorElem);

                // Date Posted
                const datePosted = new Date(post.date).toLocaleDateString(); // Convert to a readable format
                const dateElem = document.createElement('p');
                dateElem.innerText = `Date Posted: ${datePosted}`;
                postSection.appendChild(dateElem);


                // Add post content
                const content = document.createElement('div'); // We can still use a div for the content inside the section
                content.innerHTML = post.content.rendered;
                postSection.appendChild(content);

                // Categories (Directly, just the IDs for now)
                const categoriesElem = document.createElement('p');
                categoriesElem.innerText = `Categories: ${post.categories.join(', ')}`;
                postSection.appendChild(categoriesElem);

                // Tags (Directly, just the IDs for now)
                const tagsElem = document.createElement('p');
                tagsElem.innerText = `Tags: ${post.tags.join(', ')}`;
                postSection.appendChild(tagsElem);               
    
                // Add featured image if it exists
                if (post._embedded['wp:featuredmedia']) {
                    const img = document.createElement('img');
                    img.src = post._embedded['wp:featuredmedia'][0].source_url;
                    postSection.appendChild(img);
                }
    
                container.appendChild(postSection); // append the postSection to the contact-content container
            });
        })
        .catch(error => {
            console.log('There was a problem with the fetch operation:', error.message);
        });
    

});
