create table produk (
id int primary key auto_increment,
nama_produk varchar(50),
gambar varchar(100),
harga float,
created_at timestamp,
updated_at timestamp
);
go
create table keranjang(
id int primary key auto_increment,
id_produk int,
qty int,
total_harga float,
created_at timestamp,
updated_at timestamp
);
go
INSERT INTO produk(nama_produk,gambar,harga,created_at,updated_at) values('Nasi Goreng','nasi_goreng.jpeg',15000,now(),now());
go
INSERT INTO produk(nama_produk,gambar,harga,created_at,updated_at) values('Pecel Ayam','pecel_ayam.jpeg',21000,now(),now());
go
INSERT INTO produk(nama_produk,gambar,harga,created_at,updated_at) values('Gado gado','gado_gado.jpeg',15000,now(),now());
go
INSERT INTO produk(nama_produk,gambar,harga,created_at,updated_at) values('Nasi Kapao','nasi_kapao.jpeg',25000,now(),now());
go
INSERT INTO produk(nama_produk,gambar,harga,created_at,updated_at) values('Soto Mie','soto_mie.jpeg',14000,now(),now());
go
INSERT INTO produk(nama_produk,gambar,harga,created_at,updated_at) values('Sate Ayam','sate_ayam.jpeg',23000,now(),now());

