<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Record Insertion with JS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h1 class="text-center mb-4">Add Records to Database</h1>
    <form id="recordForm" class="mb-4">
        <div class="mb-3">
            <label for="fullname" class="form-label">Full Name:</label>
            <input type="text" id="fullname" name="fullname" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="username" class="form-label">Username:</label>
            <input type="text" id="username" name="username" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" id="password" name="password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <div id="response" class="alert alert-info" style="display: none;"></div>

    <h2 class="text-center mb-4">Records</h2>

    <div class="mb-3">
        <label for="usernameFilter" class="form-label">Filter by Username:</label>
        <select id="usernameFilter" class="form-select">
            <option value="">All</option>
        </select>
    </div>

    <div id="records" class="table-responsive"></div>

    <h2 class="text-center mb-4">Edit Record</h2>
    <form id="editForm" class="mb-4" style="display: none;">
        <input type="hidden" id="editId" name="id">

        <div class="mb-3">
            <label for="editFullname" class="form-label">Full Name:</label>
            <input type="text" id="editFullname" name="fullname" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="editUsername" class="form-label">Username:</label>
            <input type="text" id="editUsername" name="username" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="editEmail" class="form-label">Email:</label>
            <input type="email" id="editEmail" name="email" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <button type="button" id="cancelEdit" class="btn btn-secondary">Cancel</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const fetchUsernames = () => {
                fetch('fetch_usernames.php')
                    .then(response => response.text())
                    .then(data => {
                        document.getElementById('usernameFilter').innerHTML += data;
                    })
                    .catch(error => console.error('Error fetching usernames:', error));
            };

            const fetchRecords = (username = '') => {
                const url = username ? `fetch_records.php?username=${username}` : 'fetch_records.php';
                fetch(url)
                    .then(response => response.text())
                    .then(data => {
                        document.getElementById('records').innerHTML = data;

                        // Add event listeners for edit buttons
                        document.querySelectorAll('.edit-btn').forEach(button => {
                            button.addEventListener('click', function() {
                                const record = JSON.parse(this.dataset.record);
                                populateEditForm(record);
                            });
                        });
                    })
                    .catch(error => {
                        document.getElementById('records').innerHTML = '<p class="text-danger">An error occurred while fetching records.</p>';
                    });
            };

            const populateEditForm = (record) => {
                document.getElementById('editId').value = record.id;
                document.getElementById('editFullname').value = record.fullname;
                document.getElementById('editUsername').value = record.username;
                document.getElementById('editEmail').value = record.email;
                editForm.style.display = 'block';
            };

            // Fetch usernames on page load
            fetchUsernames();

            // Fetch records on page load
            fetchRecords();

            document.getElementById('usernameFilter').addEventListener('change', function() {
                const selectedUsername = this.value;
                fetchRecords(selectedUsername);
            });

            document.getElementById('recordForm').addEventListener('submit', function(e) {
                e.preventDefault();

                const formData = new FormData(this);

                fetch('submit.php', {
                    method: 'POST',
                    body: formData
                })
                    .then(response => response.text())
                    .then(data => {
                        document.getElementById('response').innerHTML = data;
                        document.getElementById('response').style.display = 'block';
                        fetchRecords(); // Refresh records after submission
                    })
                    .catch(error => {
                        document.getElementById('response').innerHTML = '<p class="text-danger">An error occurred while submitting the form.</p>';
                        document.getElementById('response').style.display = 'block';
                    });
            });

            const editForm = document.getElementById('editForm');
            const cancelEdit = document.getElementById('cancelEdit');

            editForm.addEventListener('submit', function(e) {
                e.preventDefault();

                const formData = new FormData(this);

                fetch('edit_record.php', {
                    method: 'POST',
                    body: formData
                })
                    .then(response => response.text())
                    .then(data => {
                        alert(data);
                        editForm.style.display = 'none';
                        fetchRecords();
                    })
                    .catch(error => {
                        alert('An error occurred while updating the record.');
                    });
            });

            cancelEdit.addEventListener('click', function() {
                editForm.style.display = 'none';
            });
        });
    </script>
</body>
</html>
