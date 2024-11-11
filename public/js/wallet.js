function slideLeft() {
    document.getElementById('wallets').scrollBy({
        left: -250,
        behavior: 'smooth'
    });
}

function slideRight() {
    document.getElementById('wallets').scrollBy({
        left: 250,
        behavior: 'smooth'
    });
}