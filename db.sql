create table Producto(
	idproducto INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nombre VARCHAR (100),
	precio DECIMAL(5,2),
	descripcion VARCHAR(100),
	cantidad INTEGER
)

CREATE TABLE Clientes(
	idcliente INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nombre VARCHAR(100),
	tipo VARCHAR(1),
	email VARCHAR(100),
    contraseña VARCHAR(100),
	telefono INTEGER,
	direccion TEXT
)

CREATE TABLE Ventas(
	idventas INT NOT NULL AUTO_INCREMENT,
	fecha DATE,
    courier VARCHAR(30),
	cantidadV INT,
	idproducto INT NOT NULL,
	idcliente INT NOT NULL,
	PRIMARY KEY(idventas),
	FOREIGN KEY(idproducto) REFERENCES Producto(idproducto),
	FOREIGN KEY(idcliente) REFERENCES Clientes(idcliente)
);
