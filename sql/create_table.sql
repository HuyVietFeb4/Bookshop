
-- Users --
CREATE TABLE Users(
	Users_ID INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	Email VARCHAR(254) NOT NULL UNIQUE,
	User_name VARCHAR(20) NOT NULL,
	Passwords VARCHAR(30) NOT NULL,
    Money_spent NUMERIC(15,3) NOT NULL,
    PFP_URL VARCHAR(100)
);
-- Contact --
CREATE TABLE Contact(
	Contact_ID INT PRIMARY KEY AUTO_INCREMENT,
	Message TEXT,
	Title VARCHAR(100) NOT NULL,
	Users_ID INT UNSIGNED,
    Contact_date DATE DEFAULT CURRENT_TIMESTAMP,
	FOREIGN KEY (Users_ID) REFERENCES Users(Users_ID) ON DELETE SET NULL
);
-- Author --
CREATE TABLE Author(
	Author_ID INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	Author_name TEXT
);

-- Order --
CREATE TABLE Orders(
	Order_ID INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	Total_money NUMERIC(15,3) NOT NULL,
	Users_ID INT UNSIGNED NOT NULL,
    Order_date DATETIME DEFAULT CURRENT_TIMESTAMP,
	FOREIGN KEY (Users_ID) REFERENCES Users(Users_ID) ON DELETE CASCADE
);

-- Book --
CREATE TABLE Book(
	Book_ID INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	Genre VARCHAR(20),
	Price NUMERIC(15,3) NOT NULL CHECK(Price >= 0),
	Title VARCHAR(100) NOT NULL,
	Descriptions TEXT,
    Image_URL VARCHAR(100)
);
-- Review --
CREATE TABLE Review (
	Review_ID INT PRIMARY KEY AUTO_INCREMENT,
	Review_description TEXT NOT NULL,
	Review_date DATETIME DEFAULT CURRENT_TIMESTAMP,
	Stars INT NOT NULL CHECK (Stars >= 0 AND Stars <= 5)
);
-- Order Item--
CREATE TABLE Order_item(
	Order_ID INT UNSIGNED,
	Book_ID INT UNSIGNED,

	PRIMARY KEY(Order_ID, Book_ID),
	
	Quantity INT UNSIGNED,
	Review_ID INT UNSIGNED,
    Conditions VARCHAR(10) NOT NULL,
	
	FOREIGN KEY (Order_ID) REFERENCES Orders(Order_ID) ON DELETE CASCADE,
	FOREIGN KEY (Book_ID) REFERENCES Book(Book_ID) ON DELETE CASCADE
);
-- Writes --
CREATE TABLE Writes (
	Author_ID INT UNSIGNED,
	Book_ID INT UNSIGNED,

	PRIMARY KEY(Author_ID, Book_ID),
	FOREIGN KEY (Author_ID) REFERENCES Author(Author_ID) ON DELETE CASCADE,
	FOREIGN KEY (Book_ID) REFERENCES Book(Book_ID) ON DELETE CASCADE
);
