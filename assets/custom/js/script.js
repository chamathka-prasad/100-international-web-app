const header = document.querySelector('.custom-header');
const showAtTopLimit = 300; // Show header only within 300px of the top

// Show or hide the header based on scroll position
window.addEventListener('scroll', function() {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    // Show the header only when within 300px of the top of the page
    if (scrollTop <= showAtTopLimit) {
        header.style.top = '30px'; // Show header
        header.classList.remove('hidden');
    } else {
        // Hide the header when scrolling beyond 300px
        header.style.top = '-100px'; // Hide header
        header.classList.add('hidden');
    }
});



document.addEventListener("DOMContentLoaded", () => {
    const mirrorContainer = document.querySelector('.mirror-container');
    const links = [...document.querySelectorAll('.custom-link:not(.gradiendColorAdd)')];
    const header = document.querySelector('.custom-header');

    const mirrorCount = 10; // Number of rhombuses
    const speedRange = [3, 6]; // Random speed range (in seconds)
    const headerWidth = header.offsetWidth;
    const headerHeight = header.offsetHeight;

    // Create rhombuses
    for (let i = 0; i < mirrorCount; i++) {
        const mirror = document.createElement('div');
        mirror.classList.add('mirror');

        // Set initial random position
        const startY = Math.random() * headerHeight; // Random vertical position
        const duration = Math.random() * (speedRange[1] - speedRange[0]) + speedRange[0];

        mirror.style.top = `${startY}px`;
        mirror.style.animationDuration = `${duration}s`;

        // Append mirror to the container
        mirrorContainer.appendChild(mirror);

        // Move mirrors across the container
        let positionX = -100; // Start off-screen left
        const speed = Math.random() * 3 + 2; // Random speed for each mirror

        function moveMirror() {
            positionX += speed;

            if (positionX > headerWidth) {
                // Reset mirror position
                positionX = -100;
                mirror.style.top = `${Math.random() * headerHeight}px`; // Randomize vertical position
            }

            mirror.style.left = `${positionX}px`;

            // Check for overlap with links and highlight
            links.forEach(link => {
                const linkRect = link.getBoundingClientRect();
                const mirrorRect = mirror.getBoundingClientRect();

                if (
                    mirrorRect.right > linkRect.left &&
                    mirrorRect.left < linkRect.right &&
                    mirrorRect.bottom > linkRect.top &&
                    mirrorRect.top < linkRect.bottom
                ) {
                    // Highlight and scale the link
                    link.style.transform = 'scale(1.2)';
                    link.style.color = '#feca57';
                } else {
                    // Reset link style
                    link.style.transform = 'scale(1)';
                    link.style.color = 'white';
                }
            });

            requestAnimationFrame(moveMirror);
        }

        // Start the mirror animation
        moveMirror();
    }
});

