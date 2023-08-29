const footer = document.querySelector('.footbar');
const baseURL = window.location.href.replace(/\/[^/]*$/, '/');
const footbarURL = `${baseURL}footbar.html`;

fetch(footbarURL)
  .then(res => res.text())
  .then(data => {
    footer.innerHTML = data;
  })
  .catch(error => {
    console.error('Error fetching footbar content:', error);
  });
