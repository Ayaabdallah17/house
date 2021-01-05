// for comments box
let commentBox = document.getElementById('comments');
console.log(commentBox, 'action')
if(commentBox !== null){
    document.getElementById('toggleShow').addEventListener('click', function(){
        console.log('clicked')
        if(commentBox.dataset.show === "false"){
            commentBox.style.display = "block";
            commentBox.dataset.show = "true";
            this.innerText = 'Hide Comments';
        } else {
            commentBox.style.display = "none";
            commentBox.dataset.show = "false";
            this.innerText = 'Show Comments';
        }
    });
}

