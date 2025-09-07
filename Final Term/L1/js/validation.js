document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('data');
            const updateBtn = document.getElementById('update');
            const deleteBtn = document.getElementById('delete');
            const refreshBtn = document.getElementById('refresh');
            const userData = document.getElementById('user-data');
            const messageDiv = document.getElementById('message');

            loadUserData();
            
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                if (validation()) {
                    storeUserData();
                }
            });
            
            updateBtn.addEventListener('click', function() {
                const username = document.getElementById('username').value.trim();
                if (!username) {
                    showMessage('Please enter a username to update', 'error');
                    return;
                }
                updateUserData();
            });
            
            deleteBtn.addEventListener('click', function() {
                const username = document.getElementById('username').value.trim();
                if (!username) {
                    showMessage('Please enter a username to delete', 'error');
                    return;
                }
                deleteUserData();
            });
            
            refreshBtn.addEventListener('click', function() {
                loadUserData();
            });
            
            function validation() {
                const name = document.getElementById("name").value.trim();
                const username = document.getElementById("username").value.trim();
                const email = document.getElementById("email").value.trim();
                const password = document.getElementById("createpass").value.trim();
                const conpassword = document.getElementById("confirmpass").value.trim();

                const name_error = document.getElementById("name-error");
                const username_error = document.getElementById("username-error");
                const email_error = document.getElementById("email-error");
                const createpass_error = document.getElementById("createpass-error");
                const confirmpass_error = document.getElementById("confirmpass-error");

                name_error.innerHTML = "";
                username_error.innerHTML = "";
                email_error.innerHTML = "";
                createpass_error.innerHTML = "";
                confirmpass_error.innerHTML = "";

                let isValid = true;

                if (name === "") {
                    name_error.innerHTML = "Name is required!";
                    isValid = false;
                }
                if (username === "") {
                    username_error.innerHTML = "Username is required!";
                    isValid = false;
                }
                if (email === "") {
                    email_error.innerHTML = "Email is required!";
                    isValid = false;
                } else if (!validateEmail(email)) {
                    email_error.innerHTML = "Please enter a valid email!";
                    isValid = false;
                }
                if (password === "") {
                    createpass_error.innerHTML = "Password is required!";
                    isValid = false;
                } else if (password.length < 6) {
                    createpass_error.innerHTML = "Password must be at least 6 characters!";
                    isValid = false;
                }
                if (conpassword === "") {
                    confirmpass_error.innerHTML = "Re-enter your password!";
                    isValid = false;
                } else if (conpassword !== password) {
                    confirmpass_error.innerHTML = "Password didn't match!";
                    isValid = false;
                }
                
                return isValid;
            }
            
            function validateEmail(email) {
                const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return re.test(email);
            }
            
            function storeUserData() {
                const formData = new FormData(form);
                
                const xhr = new XMLHttpRequest();
                xhr.open('POST', '../php/info.php', true);
                
                xhr.onload = function() {
                    if (this.status === 200) {
                        if (this.responseText.includes('successfully')) {
                            showMessage('Data stored successfully!', 'success');
                            form.reset();
                            loadUserData();
                        } else {
                            showMessage('Error: ' + this.responseText, 'error');
                        }
                    } else {
                        showMessage('Error: Request failed.', 'error');
                    }
                };
                
                xhr.onerror = function() {
                    showMessage('Error: Request failed.', 'error');
                };
                
                xhr.send(formData);
            }
            
            function loadUserData() {

                const xhr = new XMLHttpRequest();
                xhr.open('GET', '../php/get-users.php', true);
                
                xhr.onload = function() {
                    if (this.status === 200) {
                        try {
                            const users = JSON.parse(this.responseText);
                            userData.innerHTML = '';
                            
                            if (users.length === 0) {
                                userData.innerHTML = '<tr><td colspan="4" style="text-align: center;">No user data found</td></tr>';
                                return;
                            }
                            
                            users.forEach(user => {
                                const row = document.createElement('tr');
                                row.innerHTML = `
                                    <td>${user.name}</td>
                                    <td>${user.username}</td>
                                    <td>${user.email}</td>
                                    <td>
                                        <button class="action-btn select-btn" onclick="selectUser('${user.username}')">Select</button>
                                    </td>
                                `;
                                userData.appendChild(row);
                            });
                        } catch (e) {
                            userData.innerHTML = '<tr><td colspan="4" style="text-align: center;">Error parsing data</td></tr>';
                            console.error('Error:', e);
                        }
                    } else {
                        userData.innerHTML = '<tr><td colspan="4" style="text-align: center;">Error loading data</td></tr>';
                    }
                };
                
                xhr.onerror = function() {
                    userData.innerHTML = '<tr><td colspan="4" style="text-align: center;">Error loading data</td></tr>';
                };
                
                xhr.send();
            }
            
            function updateUserData() {
                const formData = new FormData(form);
                const xhr = new XMLHttpRequest();
                xhr.open('POST', '../php/update-user.php', true);
                
                xhr.onload = function() {
                    if (this.status === 200) {
                        if (this.responseText.includes('successfully')) {
                            showMessage('Data updated successfully!', 'success');
                            form.reset();
                            loadUserData();
                        } else {
                            showMessage('Error: ' + this.responseText, 'error');
                        }
                    } else {
                        showMessage('Error: Request failed.', 'error');
                    }
                };
                
                xhr.onerror = function() {
                    showMessage('Error: Request failed.', 'error');
                };
                
                xhr.send(formData);
            }
            
            function deleteUserData() {
                const username = document.getElementById('username').value.trim();
                const xhr = new XMLHttpRequest();
                xhr.open('GET', '../php/delete-user.php?username=' + encodeURIComponent(username), true);
                
                xhr.onload = function() {
                    if (this.status === 200) {
                        if (this.responseText.includes('successfully')) {
                            showMessage('User deleted successfully!', 'success');
                            form.reset();
                            loadUserData();
                        } else {
                            showMessage('Error: ' + this.responseText, 'error');
                        }
                    } else {
                        showMessage('Error: Request failed.', 'error');
                    }
                };
                
                xhr.onerror = function() {
                    showMessage('Error: Request failed.', 'error');
                };
                
                xhr.send();
            }
            
            function showMessage(message, type) {
                messageDiv.innerHTML = `<div class="message ${type}">${message}</div>`;
                setTimeout(() => {
                    messageDiv.innerHTML = '';
                }, 3000);
            }
        
            window.selectUser = function(username) {
                const xhr = new XMLHttpRequest();
                xhr.open('GET', '../php/get-user.php?username=' + encodeURIComponent(username), true);
                
                xhr.onload = function() {
                    if (this.status === 200) {
                        try {
                            const user = JSON.parse(this.responseText);
                            document.getElementById('name').value = user.name;
                            document.getElementById('username').value = user.username;
                            document.getElementById('email').value = user.email;
                            document.getElementById('createpass').value = '';
                            document.getElementById('confirmpass').value = '';
                            
                            showMessage('User data loaded. You can now update or delete.', 'success');
                        } catch (e) {
                            showMessage('Error parsing user data', 'error');
                        }
                    } else {
                        showMessage('Error loading user data', 'error');
                    }
                };
                
                xhr.onerror = function() {
                    showMessage('Error loading user data', 'error');
                };
                
                xhr.send();
            };
        });