var showFormButton = document.getElementById('showFormButton');
var formContainer = document.getElementById('formContainer');

showFormButton.addEventListener('click', function() {
    if (formContainer.style.display === 'none' || formContainer.style.display === '') {
        formContainer.style.display = 'block';
    } else {
        formContainer.style.display = 'none';
    }
});
var sqlForm = document.getElementById('sqlForm');
sqlForm.addEventListener('submit', function(event) {
    event.preventDefault();
    var poids = document.getElementById('poids').value;
    var calorie = document.getElementById('calories').value;
    var id_aliment = document.getElementById('id_aliment').value;
    var formData = new FormData();
    formData.append('calorie', calorie);
    formData.append('id_aliment', id_aliment);
    formData.append('poids', poids);
    updateChampSQL(formData);
});

function updateChampSQL(formData) {
    $.ajax({
        url: 'http://localhost/projet/IDAW/projet/backend/info_aliment.php', 
        type: 'POST',
        data: formData,
        processData: false,  
        contentType: false,
        success: function(response) {
            window.location.href = "../frontend/welcome.php";
        },
        error: function(xhr, status, error) {
            alert("Erreur: " + xhr.responseText);
        }
    });
}