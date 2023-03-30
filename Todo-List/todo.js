window.addEventListener('load', () =>{
    todos = JSON.parse(localStorage.getItem('todos')) || [];
    const newTodoForm = document.querySelector('#new-todo');

    newTodoForm.addEventListener('submit', e => {
        e.preventDefault();

        const todo = {
            title: e.target.elements.title.value,
            desc: e.target.elements.desc.value,
        }

        todos.push(todo);

        localStorage.setItem('todos', JSON.stringify(todos));

        // Reset the form
        e.target.reset()

        DisplayTodos()
    })

    DisplayTodos()
})

const styling = {
    todoItem : "p-4 border-b-2 border-t-2",
    header : "flex flex-row",
    headerText: "w-8/12",
    headerTitle: "text-gray-600 text-lg font-medium",
    headerIcons: "w-4/12 flex justify-between",
    editButton: "text-green-600 hover:text-green-400 focus:outline-none",
    editIcon : "fa-solid fa-pen-to-square",
    deleteButton: "text-red-600 hover:text-red-400 focus:outline-none",
    deleteIcon : "fa-solid fa-trash",
    dropButton: "text-gray-600 hover:text-gray-400 focus:outline-none",
    dropIcon : "fa-solid fa-plus",
    dropDown: "bg-gray-200 mt-4 p-2 rounded-lg hidden",
    dropDownTitle: "bg-gray-200 text-gray-600 text-base font-medium focus:outline-none",
    dropDownDesc: "bg-gray-200 text-sm text-gray-600 focus:outline-none",
    liftButton: "text-gray-600 hover:text-gray-400 focus:outline-none",
    liftIcon : "fa-solid fa-minus",
}

function DisplayTodos() {
    if (todos.length < 1){
        container = document.getElementById('task-container');
        container.classList.add('hidden')
    } else {
        container = document.getElementById('task-container');
        container.classList.remove('hidden')
        const todoList = document.querySelector('#tasks');
        todoList.innerHTML = "";

        todos.forEach(todo => {
            const todoItem = document.createElement('div');
            todoItem.classList.add(...styling.todoItem.split(' '));
            const header = document.createElement('div');
            header.classList.add(...styling.header.split(' '));
            const headerText = document.createElement('div');
            headerText.classList.add(...styling.headerText.split(' '));
            const headerTitle = document.createElement('h3');
            headerTitle.classList.add(...styling.headerTitle.split(' '));
            const headerIcons = document.createElement('div');
            headerIcons.classList.add(...styling.headerIcons.split(' '));
            const editButton = document.createElement('button');
            editButton.classList.add(...styling.editButton.split(' '));
            const editIcon = document.createElement('i');
            editIcon.classList.add(...styling.editIcon.split(' '));
            const deleteButton = document.createElement('button');
            deleteButton.classList.add(...styling.deleteButton.split(' '));
            const deleteIcon = document.createElement('i');
            deleteIcon.classList.add(...styling.deleteIcon.split(' '));
            const dropButton = document.createElement('button');
            dropButton.classList.add(...styling.dropButton.split(' '));
            const dropIcon = document.createElement('i');
            dropIcon.classList.add(...styling.dropIcon.split(' '));
            const dropDown = document.createElement('div');
            dropDown.classList.add(...styling.dropDown.split(' '));
            const dropDownTitle = document.createElement('div');
            dropDownTitle.classList.add("flex", "flex-row")
            const dropDownRow = document.createElement('div');
            dropDownRow.classList.add("w-11/12")
            const dropDownTitleText = document.createElement('input');
            dropDownTitleText.classList.add(...styling.dropDownTitle.split(' '));
            const dropDownIcon = document.createElement('div');
            const liftButton = document.createElement('button');
            liftButton.classList.add(...styling.liftButton.split(' '));
            const liftIcon = document.createElement('i');
            liftIcon.classList.add(...styling.liftIcon.split(' '));
            const dropDownDesc = document.createElement('div');
            const dropDownDescText = document.createElement('input');
            dropDownDescText.classList.add(...styling.dropDownDesc.split(' '));
            
            headerTitle.innerHTML = todo.title;
            dropDownTitleText.value = todo.title;
            dropDownDescText.value = todo.desc;
            dropDownTitleText.setAttribute('readonly', 'readonly');
            dropDownDescText.setAttribute('readonly', 'readonly');

            dropDownDesc.appendChild(dropDownDescText);
            liftButton.appendChild(liftIcon);
            dropDownIcon.appendChild(liftButton);
            dropDownRow.appendChild(dropDownTitleText);
            dropDownTitle.appendChild(dropDownRow);
            dropDownTitle.appendChild(dropDownIcon);
            dropDown.appendChild(dropDownTitle);
            dropDown.appendChild(dropDownDesc);
            dropButton.appendChild(dropIcon);
            deleteButton.appendChild(deleteIcon);
            editButton.appendChild(editIcon);
            headerIcons.appendChild(editButton);
            headerIcons.appendChild(deleteButton);
            headerIcons.appendChild(dropButton);
            headerText.appendChild(headerTitle);
            header.appendChild(headerText);
            header.appendChild(headerIcons);
            todoItem.appendChild(header);
            todoItem.appendChild(dropDown);
            todoList.appendChild(todoItem);

            // Handle Buttons
            dropButton.addEventListener('click', (e)=>{
                dropDown.classList.remove('hidden')
            });

            liftButton.addEventListener('click', (e)=>{
                dropDown.classList.add('hidden')
            });

            deleteButton.addEventListener('click', (e) =>{
                todos = todos.filter(t => t != todo);
                localStorage.setItem('todos', JSON.stringify(todos));
                DisplayTodos()
            });

            editButton.addEventListener('click', (e)=>{
                dropDown.classList.remove('hidden')
                dropDownTitleText.removeAttribute('readonly');
                dropDownDescText.removeAttribute('readonly');
                dropDownTitleText.focus();
                dropDownDescText.focus();
                dropDownTitleText.addEventListener('blur', (e)=>{
                    dropDownTitleText.setAttribute('readonly', true);
                    todo.title = e.target.value;
                    localStorage.setItem('todos', JSON.stringify(todos));
                    DisplayTodos();
                })
                dropDownDescText.addEventListener('blur', (e)=>{
                    dropDownDescText.setAttribute('readonly', true);
                    todo.desc = e.target.value;
                    localStorage.setItem('todos', JSON.stringify(todos));
                })
            })
        })
    }
}