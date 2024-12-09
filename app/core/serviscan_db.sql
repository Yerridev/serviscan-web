-- Eliminar la base de datos si ya existe
DROP DATABASE IF EXISTS servican_db;

-- Crear la base de datos
CREATE DATABASE servican_db CHARACTER SET utf8mb4 
DEFAULT COLLATE utf8mb4_general_ci;
USE servican_db;

-- Tabla de roles
CREATE TABLE roles (
    id_rol INT PRIMARY KEY AUTO_INCREMENT,
    nombre_rol VARCHAR(50) UNIQUE NOT NULL,
    descripcion_rol TEXT
) ENGINE=InnoDB;

-- Tabla de usuarios
CREATE TABLE usuarios (
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    usuario VARCHAR(50) UNIQUE NOT NULL,
    contrasena VARCHAR(255) NOT NULL,
    id_rol INT,
    FOREIGN KEY (id_rol) REFERENCES roles(id_rol) ON DELETE SET NULL
) ENGINE=InnoDB;

-- Tabla de productos
CREATE TABLE productos (
    id_producto INT PRIMARY KEY AUTO_INCREMENT,
    codigo VARCHAR(20) UNIQUE NOT NULL,
    nombre_producto VARCHAR(100) NOT NULL,
    descripcion TEXT NOT NULL,
    stock INT DEFAULT 0,
    precio DECIMAL(10, 2) NOT NULL,
    imagen VARCHAR(255) DEFAULT NULL
) ENGINE=InnoDB;

-- Tabla de ventas
CREATE TABLE ventas (
    id_venta INT PRIMARY KEY AUTO_INCREMENT,
    fecha DATETIME DEFAULT CURRENT_TIMESTAMP,
    id_usuario INT,
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario) ON DELETE SET NULL
) ENGINE=InnoDB;

-- Tabla de detalle de ventas
CREATE TABLE detalle_ventas (
    id_detalle INT PRIMARY KEY AUTO_INCREMENT,
    id_venta INT,
    id_producto INT,
    cantidad INT NOT NULL,
    precio_unitario DECIMAL(10, 2) NOT NULL,
    subtotal DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (id_venta) REFERENCES ventas(id_venta) ON DELETE CASCADE,
    FOREIGN KEY (id_producto) REFERENCES productos(id_producto) ON DELETE CASCADE
) ENGINE=InnoDB;

-- Tabla de sesiones
CREATE TABLE sesiones (
    id_sesion INT PRIMARY KEY AUTO_INCREMENT,
    id_usuario INT NOT NULL,
    token VARCHAR(255) NOT NULL UNIQUE,
    fecha_inicio TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    fecha_expiracion DATETIME NOT NULL,
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario) ON DELETE CASCADE
) ENGINE=InnoDB;

-- Inserción inicial de roles
INSERT INTO roles (nombre_rol, descripcion_rol) VALUES 
    ('Administrador', 'Acceso completo al sistema, incluyendo gestión de usuarios, productos y ventas.'), 
    ('Cliente', 'Acceso limitado a funciones de compra y consulta de productos.');

-- Inserción inicial de usuarios
INSERT INTO usuarios (nombre, apellido, usuario, contrasena, id_rol) VALUES 
    ('Admin', 'Principal', 'admin', SHA2('admin123', 256), 1),
    ('Juan', 'Pérez', 'juan.perez', SHA2('cliente123', 256), 2);

-- Inserción inicial de productos
INSERT INTO productos (codigo, nombre_producto, descripcion, stock, precio, imagen) VALUES
    ('P001', 'Aceite para motor', 'Aceite de alta calidad para motores de vehículos pesados.', 20, 150.00, 'aceite.jpg'),
    ('P002', 'Filtro de aire', 'Filtro diseñado para vehículos Scania.', 15, 80.00, 'filtro.jpg');
