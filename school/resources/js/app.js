import './bootstrap';

const editButtons = document.querySelectorAll('.edit-button');

editButtons.forEach((editButton, index) => {
    editButton.addEventListener('click', () => {
        const row = editButton.closest('tr');
        const viewModeElements = row.querySelectorAll('.view-mode');
        const editModeElements = row.querySelectorAll('.edit-mode');
        const saveButton = row.querySelector('.save-button');
        const deleteButton = row.querySelector('.delete-button');
        const updateForm = row.querySelector('.update-form');
        const deleteForm = row.querySelector('.delete-form');

        viewModeElements.forEach((element) => {
            element.classList.add('hidden');
        });

        editModeElements.forEach((element) => {
            element.classList.remove('hidden');
        });

        saveButton.classList.remove('hidden');
        deleteButton.classList.remove('hidden');
        updateForm.classList.remove('hidden');
        deleteForm.classList.remove('hidden');
    });
});
