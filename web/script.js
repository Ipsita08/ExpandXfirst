document.addEventListener('DOMContentLoaded', function() {
    // Fetch members data from the backend API
    fetch('api/members')
      .then(response => response.json())
      .then(members => {
        const table = document.getElementById('members-table');
  
        members.forEach(member => {
          const row = document.createElement('tr');
  
          const idCell = document.createElement('td');
          idCell.textContent = member.id;
          row.appendChild(idCell);
  
          const nameCell = document.createElement('td');
          nameCell.textContent = member.name;
          row.appendChild(nameCell);
  
          const emailCell = document.createElement('td');
          emailCell.textContent = member.email;
          row.appendChild(emailCell);
  
          const roleCell = document.createElement('td');
          const roleDropdown = document.createElement('select');
          roleDropdown.classList.add('form-select');
  
          // Populate the dropdown with role options
          const roles = ['Admin', 'Member', 'Guest'];
          roles.forEach(role => {
            const option = document.createElement('option');
            option.textContent = role;
            roleDropdown.appendChild(option);
          });
  
          roleCell.appendChild(roleDropdown);
          row.appendChild(roleCell);
  
          const statusCell = document.createElement('td');
          const statusText = document.createElement('span');
          statusText.textContent = member.status && member.status === 'active' ? 'Active' : 'Inactive';
          statusText.classList.add(member.status && member.status === 'active' ? 'text-success' : 'text-danger');
          statusCell.appendChild(statusText);
          row.appendChild(statusCell);
  
          const actionsCell = document.createElement('td');
          if (member.status && member.status !== 'active') {
            const resendButton = document.createElement('button');
            resendButton.textContent = 'Resend';
            resendButton.classList.add('btn', 'btn-sm', 'btn-primary');
            actionsCell.appendChild(resendButton);
          }
          row.appendChild(actionsCell);
  
          table.appendChild(row);
        });
      })
      .catch(error => console.error('Error:', error));
  });
  