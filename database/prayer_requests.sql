CREATE TABLE prayer_requests (
	email VARCHAR(255) PRIMARY KEY NOT NULL,
	first_name VARCHAR(255) NOT NULL,
	last_name VARCHAR(255) NOT NULL,
	request_title VARCHAR(255) NOT NULL,
	request_body text NOT NULL
)