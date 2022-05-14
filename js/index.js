var starCount = 0;

window.onload = function() {
    var stars = document.getElementById('stars');
    stars.outerHTML = '<div id="stars"></div>';
    addStars();
}
function addStars() {
    console.log('test');
    var starLoop = setInterval(function() {
        console.log('test');
        var starChoice = Math.random();
        var x = Math.floor(window.innerWidth * Math.random());
        if(starChoice <= .5) {
            stars.outerHTML += `<div id="star${starCount}" class="star-wrapper"><svg class="star star1" viewBox="0 0 54 54"><g><g><rect y="18" width="54" height="18" fill="#fff"/><rect x="18" width="18" height="54" fill="#fff"/></g></g></svg></div>`;
        } else {
            stars.outerHTML += `<div id="star${starCount}" class="star-wrapper"><svg class="star star2" viewBox="0 0 18 18"><g id="Layer_2" data-name="Layer 2"><g id="Content"><rect width="18" height="18" fill="#fff"/></g></g></svg></div>`;
        }
        var currStar = document.getElementById(`star${starCount}`);
        currStar.style.left = x+'px';
        starCount++;
        if ( starCount > 200) {
            clearInterval(starLoop);
        }
    }, 200);
}