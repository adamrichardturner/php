<?php 
function hello($name = 'World'): string {
    /*
    Define a method hello that returns "Hello, Name!" to a given name, 
    or says Hello, World! if name is not given (or passed as an empty String).

    Assuming that name is a String and it checks for user typos to return a 
    name with a first capital letter (Xxxx).
    */
    if (!$name) {
        $name = 'World';
    }
    return "Hello, " . ucfirst(strtolower($name)) . "!";
}

print_r(hello('Adam')); // Hello, Adam!
print_r(hello('')); // Hello, World!