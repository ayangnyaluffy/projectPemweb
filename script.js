document.querySelector("form").addEventListener("submit", function (e) {
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const recipeTitle = document.getElementById("recipe-title").value.trim();
    const ingredients = document.getElementById("ingredients").value.trim();
    const steps = document.getElementById("steps").value.trim();

    if (!name || !email || !recipeTitle || !ingredients || !steps) {
        e.preventDefault();
        alert("Semua field (kecuali tips) harus diisi!");
    }
});
