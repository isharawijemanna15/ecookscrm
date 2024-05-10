document.getElementById('resourceForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const projectDuration = document.getElementById('projectDuration').value;
    fetch('backend.php', {
        method: 'POST',
        body: JSON.stringify({ projectDuration }),
        headers: {
            'Content-Type': 'application/json'
        }
    })
    .then(response => response.json())
    .then(data => {
        document.getElementById('result').innerHTML = `Estimated resource allocation: ${data}`;
    })
    .catch(error => console.error('Error:', error));
});
