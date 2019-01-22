const todos = document.querySelector("#todos");

todos.addEventListener("click", handleUlClick);

function handleUlClick(e) {
  console.log(e.target.dataset.id);
  const id = e.target.dataset.id;
  deleteTodo(id);
  removeTodoFromDom(e);
}

function deleteTodo(id) {
  //remove from database
  fetch("index.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json"
    },
    body: JSON.stringify({
      id: id
    })
  }).then(res => {
    console.log(res);
  });
}

function removeTodoFromDom(e) {
  //remove from HTML
  const li = e.target;
  const ul = li.parentElement;
  ul.removeChild(li);
}
