document.addEventListener("DOMContentLoaded", function() {
    const viewButtons = document.querySelectorAll(".view-btn");
    const downloadButtons = document.querySelectorAll(".download-btn");

    viewButtons.forEach(button => {
        button.addEventListener("click", function() {
            const url = this.getAttribute("data-url");
            viewBook(url);
        });
    });

    downloadButtons.forEach(button => {
        button.addEventListener("click", function() {
            const url = this.getAttribute("data-url");
            downloadBook(url);
        });
    });

    function viewBook(url) {
        console.log("Viewing book:", url);
        // Example: window.open(url, '_blank');
    }

    function downloadBook(url) {
        console.log("Downloading book:", url);
        // Example: window.location.href = url;
    }
});