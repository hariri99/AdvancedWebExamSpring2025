document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('search');
    searchInput.addEventListener('keyup', function() {
        const query = searchInput.value;
        
        fetch(/students/search?query=${query})
            .then(response => response.json())
            .then(data => {
                const studentsList = document.getElementById('students-list');
                studentsList.innerHTML = '';
                
                if (data.length > 0) {
                    data.forEach(student => {
                        const listItem = document.createElement('li');
                        listItem.textContent = `${student.name} (Age: ${student.age})`;
                        listItem.classList.add('border, 'px-4', 'py-2');
                        studentsList.appendChild(listItem);
                    });
                } else {
                    const noResultItem = document.createElement('li');
                    noResultItem.textContent = 'No students found';
                    noResultItem.classList.add('border',  'text-red-500');
                    studentsList.appendChild(noResultItem);
                }
            });
    });
});
