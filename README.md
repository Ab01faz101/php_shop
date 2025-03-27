# miniMVC

A lightweight PHP framework designed for simple and efficient web development.

## Features

- **Routing**: Handle HTTP requests and map them to appropriate functions or controllers.
- **Validation**: Easy-to-use validation rules for form inputs.
- **Helper**: Includes various utility functions for common tasks.
- **Request**: Access to request data (GET, POST, etc.) with ease.
- **CRUD**: Simple methods for Create, Read, Update, and Delete operations.

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/Ab01faz101/php_shop.git
   ```
   ```bash
   cd php_shop
   ```

# Usage

## route service

```php
$router->addRoute('GET', '/', HomeController::class, 'index');
```
## request service
```php
$request = new Request();
$inputs = $request->post();
```
## validation service

```php
$request = new Request();
$inputs = $request->post();
$validator = new Validator();
$rules = [
    'title' => 'required',
];
$valid = $validator->validate($inputs, $rules);
if (!$valid){
    $result = ["status" => 0, "message" => "validation error"];
}
```

## CRUD Service


### create
```php
$todoModel = new Todo();
$todoModel->create($inputs);
```

### find
```php
$todoModel = new Todo();
$todoModel->find($io);
```

### read
```php
$todoModel = new Todo();
// get all
$todoModel->getAll();
// find
$todoModel->find($id);
```


### update
```php
$todoModel = new Todo();
$todoModel->update($id , $inputs);
```

### delete
```php
$todoModel = new Todo();
$todoModel->delete($id);
```




# Auth Class

A simple authentication system using PHP sessions.

## Features
- User login authentication (`attempt`)
- Check if a user is authenticated (`check`)
- Retrieve the authenticated user (`user`)
- Logout functionality (`logout`)

---

## Installation
1. Ensure your project has a `User` model that interacts with the database.
2. Include the `Auth` class in your project.
3. Start the session at the beginning of your script:

```php
use Core\Auth;

$credentials = [
    'email' => 'user@example.com',
    'password' => 'yourpassword'
];

if (Auth::attempt($credentials)) {
    echo "Login successful!";
} else {
    echo "Invalid credentials.";
}


if (Auth::check()) {
    echo "User is logged in.";
} else {
    echo "User is not logged in.";
}



$user = Auth::user();
if ($user) {
    echo "User ID: " . $user['id'];
} else {
    echo "No user is logged in.";
}


Auth::logout();
echo "User logged out.";



if (password_verify($credentials['password'], $user[0]['password'])) { ... }


```

# FileManager Class

A simple PHP class for file management, including file upload, deletion, reading, and listing.

## Features
- Upload files (`uploadFile`)
- Delete files (`deleteFile`)
- Read file contents (`readFile`)
- Check if a file exists (`fileExists`)
- List all files in the directory (`listFiles`)

---

## Installation
1. Ensure PHP has permission to write to the target directory.
2. Include the `FileManager` class in your project.
3. Ensure file uploads are enabled in `php.ini` (`file_uploads = On`).

---

## Usage

### 1. Initialize `FileManager`
```php
use Core\FileManager;

$fileManager = new FileManager('uploads/');



$file = $_FILES['uploaded_file'];
$uploadedPath = $fileManager->uploadFile($file);

if ($uploadedPath) {
    echo "File uploaded to: " . $uploadedPath;
} else {
    echo "File upload failed.";
}



if ($fileManager->deleteFile('example.txt')) {
    echo "File deleted.";
} else {
    echo "File not found.";
}


$content = $fileManager->readFile('example.txt');
if ($content !== false) {
    echo $content;
} else {
    echo "File not found.";
}


if ($fileManager->fileExists('example.txt')) {
    echo "File exists.";
} else {
    echo "File does not exist.";
}

---



## Conclusion

This is a small and experimental project created as a learning exercise. I'm excited to share it and would love to hear your feedback! If you have any suggestions, improvements, or if you can optimize it further, feel free to let me know.

Thank you for checking out **miniMVC**!
