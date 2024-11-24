const wallets = document.querySelectorAll('.wallet');
let currentIndex = 1; // Start with middle wallet

function updateWallets() {
  wallets.forEach((wallet, index) => {
    // Remove all classes first
    wallet.classList.remove('active', 'prev', 'next');
    
    if (index === currentIndex) {
      // Active (center) wallet
      wallet.classList.add('active');
    } else if (index === currentIndex - 1) {
      // Previous wallet
      wallet.classList.add('prev');
    } else if (index === currentIndex + 1) {
      // Next wallet
      wallet.classList.add('next');
    }
  });
}

function slideLeft() {
  if (currentIndex > 0) {
    currentIndex--;
    updateWallets();
  }
}

function slideRight() {
  if (currentIndex < wallets.length - 1) {
    currentIndex++;
    updateWallets();
  }
}

// Initialize positions
updateWallets();

// Add click handlers to prev/next buttons
document.querySelector('.prev-button')?.addEventListener('click', slideLeft);
document.querySelector('.next-button')?.addEventListener('click', slideRight);