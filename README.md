# Laravel Library

A library OS that allows users and librarians to view, add, checkout, and return books!

## Getting Started

User the "register" button to create an account. You will user your email and password to log in to your account in the future, you will use your username to checkout books. Your password must be a minimum of 5 characters long.

You can navigate to various parts of the site using the nav bar:
- Books:
  - View all books in the library
  - Add books to the library (either manually or through [Google Books API](https://developers.google.com/books))
  - By clicking on the book's title, you can view information for the individual book. Here you can also click the "edit" button.
    - You can edit the book's information. Release date requires a YYYY-MM-DD format. All all other formats require a string, so if you want to add a "null" field, insert a placeholder like "X".
    - You can delete the book by pressing the delete button.
- Users:
  - You can view all users in the library's system.
  - By clicking on the user's name, you can view information about the individual user. You can edit a user's information by selecting "edit":
    - Here you can edit information about the user. Your password may look longer than it is, this is a security feature to prevent someone from knowing how long your character is.
    - For now, the admin button does not work. You will need to check to box before submitting changes, but this does not currently update admin privileges.
    - You can delete a user by pressing "delete".
- Checkout:
  - Checkout shows all books currently checked out.
  - Selecting "Checkout" takes us to a checkout window:
    - You can checkout books by inputting a valid ISBN number and a username. 
    - If either the ISBN is invalid or the user does not exist, than no checkout will occur and you will be returned to the "view all checkouts" page.
    - If you try to checkout a book that is already checked out, the same action will occur.
  - Selecting "Return" takes us to a return window:
    - Entering an ISBN number of a checked out book returns the book
    - Entering an ISBN of a book that IS NOT currently checked out or an invalid ISBN breaks the program :)
- CLCPL:
  - This button takes you to the homepage.
  - The homepage tells you the name of the library, as well as additional buttons for "books", "users", and "checkout".

While logged in, if on any page other than the homepage, than the top right nav bar will show your name. Clicking on your name will show you an option to log out. If you are on the homepage, the top right corner will show "home". Clicking this will take you to your dashboard that simply tells you: "You are logged in!"

### Installing

Right now, the code likely won't run on GH Pages, so you might have to download the code yourself...

## Running the tests

Bugs that I would like to fix:
- Invalid ISBN input for on "return" page.
- Checked out books highlighted in red on "view all books" page
- Confirmation/failure message for checking out, returning, or adding books.
- Admin button on "edit user" page.
- Pulling from the API if date is just YYYY.
- User permissions: some features only available to certain users:
  - Librarians:
    - Viewing all users
    - Adding, editing, and deleting books
  - Users:
    - Clicking "users" button would just display their individual user information.

**Features I would like to add:**
- More styling: table styling

## Built With

* [Laravel 6](https://laravel.com/) - The PHP framework used
* [Bootstrap](https://getbootstrap.com/) - The CSS framework used

## Contributing

If you've found a bug in my code, please feel free to send me an Issue!

## Authors

* **Robbie Gay** - [Robbie's Blog](https://robbiegay.github.io)

## Acknowledgments

* [Rachael](https://rachyoder.github.io/), [Sam](https://github.com/anchormansam), and [Abram](https://github.com/Wildercat) all helped me work through various bugs that I was having!

