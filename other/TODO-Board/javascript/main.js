document.getElementById('button').addEventListener('click', function(){
    document.querySelector('.bg-modal').style.display ='flex';
});

document.querySelector('.close').addEventListener('click', function(){
    document.querySelector('.bg-modal').style.display = 'none';
});

const todoInput = document.querySelector(".input-message");
const todoButton = document.querySelector(".submit");
const todoList = document.querySelector(".todo-list");

todoButton.addEventListener('click', addTodo);

function addTodo(event){
    event.preventDefault();
    const todoDiv = document.createElement('div');
    todoDiv.classList.add('todo')
    const newTodo = document.createElement('li');
    newTodo.innerText = todoInput.value;
    newTodo.classList.add('todo-item');
    todoDiv.appendChild(newTodo);
    const completedButton = document.createElement('button');
    completedButton.innerText = 'L'
    completedButton.classList.add("complete-btn")
    todoDiv.appendChild(completedButton)
    const trashButton = document.createElement('button');
    trashButton.innerText = 'X'
    trashButton.classList.add("trash-btn")
    todoDiv.appendChild(trashButton)
    todoList.appendChild(todoDiv)
}
