## Api_Adpia 
### Hướng dẫn sử dụng
Mỗi api mà adpia cung cấp đều có code minh họa
### Api getConversions
-Api: `` https://event.adpia.vn/apiv2/getConversions``;
-method: POST;
- Api này trả về các trường sau:
```bash
`sdate`: lấy dữ liệu từ ngày;
`fdate` :lấy đến ngày;
`count` :tổng số bản ghi được lấy ra;
`page`: phân trang
`status`: trạng thái với 5 trạng thái: 100, 200, 210, 300, 310;
`data`: {
	`ymd` : ngày tạo ở dạng string, ví dụ:20190612;
	`his` : giờ tạo cũng ở dạng string, ví dụ:120302;
	`conversion_id`;
	`ocd` : mã đặt hàng;
	`pcd`: mã sản phẩm;
	`ccd`: mã của danh mục;
	`pname`: tên của sản phẩm;
	`sales` :tổng giá giảm;
	`cnt` : số;
	`customer`: tên khách hàng;
	`ip` : địa chỉ ip đăng nhập;
	`aff_sub`: Additional information (sub param trên tracking link)
}

```
 - Api yêu cầu các trường sau:
```bash
token: đoạn mã này được mã hóa dạng base64 từ tài khoản và mật khẩu và bắt buộc phải có ,ví dụ: 
	$token = base64_encode('account_id:password'); 
sdate: giới hạn ngày , ví dụ: 20190612, bắt buộc phải có;
edate: giới hạn ngày đầu trên, bắt buộc phải có; 
offer: tên của merchant cũng bắt buộc phải có;
status: trạng thái chỉ để lọc kết quả;
order_code: mã đặt hàng lọc kết quả;
limit: giới hạn số bản ghi lấy ra, mặc định là 300;
page: phân trang cho dữ liệu;	
```
### Api getMerchantConversions
Cách sử dụng giống API getConversions/Dành cho merchant khi muốn lấy đơn hàng của mình
-Api: `` https://event.adpia.vn/apiv2/getConversions``;
-method: POST;
$token = base64_encode('merchant_id:password');
 - Api yêu cầu các trường sau:
```bash
token: đoạn mã này được mã hóa dạng base64 từ tài khoản và mật khẩu và bắt buộc phải có ,ví dụ: 
	$token = base64_encode('account_id:password'); 
sdate: giới hạn ngày , ví dụ: 20190612, bắt buộc phải có;
edate: giới hạn ngày đầu trên, bắt buộc phải có; 
affiliate: Affiliate ID / Tùy chọn;
status: trạng thái chỉ để lọc kết quả;
order_code: mã đặt hàng lọc kết quả;
limit: giới hạn số bản ghi lấy ra, mặc định là 300;
page: phân trang cho dữ liệu;	
```
### Api productList
-Api: `` https://event.adpia.vn/apiv2/productList``;
-method: POST;
- Param:
```bash
token: đoạn mã này được mã hóa dạng base64 từ tài khoản và mật khẩu và bắt buộc phải có ,ví dụ: 
	$token = base64_encode('account_id:password'); 
merchant_id: tên của merchant không bắt buộc;
cate:  Category ID (Không bắt buộc)
limit: giới hạn số bản ghi lấy ra, mặc định là 500;
page: phân trang cho dữ liệu;
```
** Bổ sung danh sách Category Code
```bash
ART	Nghệ thuật, thủ công
BS	Sách, Văn phòng phẩm
CM	Ô tô,Xe máy
CMR	Camera / Máy quay phim
CO	Khóa học
DL	Du lịch, đặt phòng & Spa
DS	Thiết bị và phụ kiện
DT	Điện thoại
DV	Dịch vụ, Voucher
FA	Thời trang
FO	Thực phẩm
FU	Đồ gia dụng
GD	Điện tử gia dụng
HB	Khỏe đẹp
HF	Câu cá, săn bắn
HK	Nhà bếp
HL	Nhà cửa, đời sống
IA	Internet, software
IB	Bảo hiểm, ngân hàng
IS	Công nghiệp và khoa học
JS	Thiết bị vệ sinh, vệ sinh
LT	Laptop
MB	Mẹ-Bé
MI	Âm nhạc, nhạc cụ
MT	Máy tính
MTB	Máy tính bảng
OTHER	Khác
PH	Dụng cụ cầm tay và thiết bị điện
PS	Thú nuôi
RE	Bất động sản
SK	Sức khỏe, y tế
SP	Thể thao, dã ngoại
SW	Phần mềm
TBDT	Thiết bị điện tử
TG	Đồ chơi
VG	Video Games
```
### Api getDiscount:
-Api: ``https://event.adpia.vn/apigetdiscount/getDiscountCode?merchant_id=shopee``;
-Method: GET;
-Api này trả về thông tin các mã giảm giá khi mua hàng tại merchant của Adpia quản lý: ví dụ như lazada, shoppe,..
-Để lấy mã của các merchant khác chỉ cần lọc theo merchant_id của họ là được
- Ngoài ra để lọc chi tiết còn có các truwofg sau:
```bash
	start_date: giá trị YYYYMMDD (20190612), mục đích là để lọc theo ngày tháng;
	end_date : YYYYMMDD; 
	affiliate_id : tạo link chinsg xác để lấy hoa hồng;
```
### Api get All Discount:
-Api: ``https://event.adpia.vn/apigetdiscount/getDiscountAll``;
-Method: GET;
-Api này trả về thông tin tất cả các mã giảm giá khi mua hàng tại merchant của Adpia quản lý: ví dụ như lazada, shoppe,..
