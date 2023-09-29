<?php
$books=[
    ['id' => 1,
    'book_name' => 'The Catcher in the Rye',
    'author_name' => 'J.D. Salinger'
   ],
    [
    'id' => 2,
    'book_name' => 'To Kill a Mockingbird',
    'author_name' => 'Harper Lee'
   ],
    [
    'id' => 3,
    'book_name' => '1984',
    'author_name' => 'George Orwell'
   ],
];

function sortByAuthorName($book1, $book2){
    if( strlen($book1["author_name"]) > strlen($book2["author_name"]) ){
        return 1;
    }
   
    elseif(strlen($book1["author_name"]) < strlen($book2["author_name"])){
        return -1;
    }else{
        return 0;
    }

}
usort($books,'sortByAuthorName');
print_r($books);
