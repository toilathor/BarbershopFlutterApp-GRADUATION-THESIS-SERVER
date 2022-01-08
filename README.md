# DO-AN-TOT-NGHIEP-SERVER


## Status code
**200 OK** – Trả về thành công cho những phương thức GET, PUT, PATCH hoặc DELETE.
**201 Created** – Trả về khi một Resouce vừa được tạo thành công.
**204 No Content** – Trả về khi Resource xoá thành công.
**304 Not Modified** – Client có thể sử dụng dữ liệu cache.
**400 Bad Request** – Request không hợp lệ
**401 Unauthorized** – Request cần có sự authentication.
**403 Forbidden** – Server hiểu request nhưng bị từ chối không cho phép.
**404 Not Found** – Không tìm thấy rource từ URI
**405 Method Not Allowed** – Phương thức không cho phép với user hiện tại.
**410 Gone** – Resource không còn tồn tại, Version cũ đã không còn hỗ trợ.
**415 Unsupported Media Type**
**422 Unprocessable Entity** – Dữ liệu không được kiểm chứng
**429 Too Many Requests** – Request bị từ chối do bị giới hạn

## Tool
[migrations-generator](https://github.com/kitloong/laravel-migrations-generator)