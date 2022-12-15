Create table profile (
                         id int auto_increment NOT NULL,
                         fname varchar(255) NOT NULL,
                         lname varchar(255) NOT NULL,
                         gender varchar(255) NOT NULL,
                         dob varchar(255) NOT NULL,
                         age varchar(255) NOT NULL,
                         numb varchar(255) NOT NULL,
                         school varchar(255) NOT NULL,
                         foi varchar(255) NOT NULL,
                         street varchar(255) NOT NULL,
                         city varchar(255) NOT NULL,
                         province varchar(255) NOT NULL,
                         pin varchar(255) NOT NULL,
                         primary key(id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

Create table admins(
                       user_id int not null auto_increment,
                       first_name varchar (255),
                       last_name varchar (255),
                       username varchar (255),
                       password varchar (255),
                       primary key (user_id)
);