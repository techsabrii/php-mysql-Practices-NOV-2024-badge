<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Record Insertion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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

    <!-- Edit Record Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Record</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editForm">
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
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" form="editForm" class="btn btn-success">Update</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            function fetchUsernames() {
                $.ajax({
                    url: 'fetch_usernames.php',
                    type: 'GET',
                    success: function(data) {
                        $('#usernameFilter').append(data);
                    },
                    error: function() {
                        console.error('Error fetching usernames');
                    }
                });
            }

            function fetchRecords(username = '') {
                $.ajax({
                    url: 'fetch_records.php',
                    type: 'GET',
                    data: { username: username },
                    success: function(data) {
                        $('#records').html(data);

                        // Add event listeners for edit buttons
                        $('.edit-btn').on('click', function() {
                            const record = JSON.parse($(this).attr('data-record'));
                            populateEditModal(record);
                        });
                    },
                    error: function() {
                        $('#records').html('<p class="text-danger">An error occurred while fetching records.</p>');
                    }
                });
            }

            function populateEditModal(record) {
                $('#editId').val(record.id);
                $('#editFullname').val(record.fullname);
                $('#editUsername').val(record.username);
                $('#editEmail').val(record.email);
                $('#editModal').modal('show');
            }

            fetchUsernames();

            fetchRecords();

            $('#usernameFilter').on('change', function() {
                const selectedUsername = $(this).val();
                fetchRecords(selectedUsername);
            });

            $('#recordForm').on('submit', function(e) {
                e.preventDefault();
                $.ajax({
                    url: 'submit.php',
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        $('#response').html(response).show();
                        fetchRecords();
                    },
                    error: function() {
                        $('#response').html('<p class="text-danger">An error occurred while submitting the form.</p>').show();
                    }
                });
            });

            $('#editForm').on('submit', function(e) {
                e.preventDefault();

                $.ajax({
                    url: 'edit_record.php',
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        alert(response);
                        $('#editModal').modal('hide');
                        fetchRecords();
                    },
                    error: function() {
                        alert('An error occurred while updating the record.');
                    }
                });
            });
        });
    </script>
</body>
</html>