const sites = document.querySelector(".main__select-sites");
const hiddenSitemap = document.querySelector(".hidden-sitemap");

sites.addEventListener('change', (event) => {
    console.log(event.target.value)
    hiddenSitemap.value = event.target.value
});

