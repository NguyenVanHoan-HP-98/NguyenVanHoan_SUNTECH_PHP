* Lập trình hướng đối tượng
- Class & Object

1. Cơ chế (phạm vi truy cập của 1 thuộc tính, phương thức)
- Thuộc tính là gì?: 
	- Thông tin, tính chất của đối tượng
	Biến được khai báo trong class và có kèm theo cơ chế
	Ex: public $name

- Cơ chế?
	Là phạm vi truy cập của một thuộc tính, phương thức
	+ public: Cho phép access ở mọi nơi (từ ngoài class, trong class, class mà kế thừa)

	+ protected: Cho phép access (trong class, class mà kế thừa)

	+ private: Cho phép access (trong class)

- Phương thức: Nó hàm được khai báo trong class có kèm theo cơ chế

* Kế thừa trong OOP
- Cho phép class con (class kế thừa) sử dụng lại toàn bộ các thuộc & phương thức của lớp cha. Những thuộc tính và phương thức đó phải mang cơ chế public hoặc là protected

- Để kế thừa ta dùng từ khóa "extends"

Ex:
class ClassOne extends ClassTwo {
	
}

* Overide (Ghi đè dữ liệu)
* Chống ghi đè dữ liệu ta dùng từ khóa Parent
* Hằng số trong OOP
- const TÊN_HẰNG=value

* Thuộc tính tĩnh và phương thức tĩnh
- Thuộc tính tĩnh: Biến được khai báo trong class kèm theo từ khóa "static"

- Phương thức tĩnh: Hàm được khai báo trong class kèm theo từ khóa "static"

- Cách truy cập
	Bên ngoài class:
		ClassName::ThuocTinhName()
		ClassName::phuongThucName()

	Bên trong class:
		self::ThuocTinhName()
		self::phuongThucName()

* Final
- Dùng để chống ghi đè dữ liệu
- Chống kế thừa (không cho kế thừa)

* clone
- Tạo ra đối tượng mới từ đối tượng cũ có sẵn. Và khi có thay đổi sẽ không làm ảnh hưởng đến đối tượng cũ

* __construct(), __destruct()
- Hàm khởi tạo, hàm hủy

__construct(): Nó được chạy ngay sau khi có đối tượng được khởi tạo từ class. Nó chạy trước tất cả các method của class đó

__destruct(): Được chạy ngay sau khi có đối tượng được khởi tạo từ class. Nó chạy sau tất cả các phương trong class


* __construct() có tham số truyền vào

* Abstract
- Một class abstract có phương thức trừu tượng, nhưng class class khác kế thừa class abstract đó sẽ phải định nghĩa lại những phương thức abstract có trong class abstract đó

* Interface
- Bản chất của interface là kế thừa, tạo ra các tính năng và chúng ta có thể sử dụng ở bất kỳ class nào

Khai báo
interface interfaceName
{
	function test()
	function exam();
}