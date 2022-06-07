<!-- sendotp -->
<!-- POST /system/api/emailverification HTTP/2
Host: api.mcontent.net
Accept: application/json, text/plain, */*
Content-Type: application/x-www-form-urlencoded
Content-Length: 83
Accept-Encoding: gzip, deflate
User-Agent: okhttp/4.9.1

{"email":"danisalaman123@ptsuroyya.my.id","password":"Kaserinas123@","type":"user"} -->
<!-- respone -->
<!-- HTTP/2 200 OK
Date: Tue, 07 Jun 2022 16:31:32 GMT
Content-Type: application/json
Content-Length: 33
Access-Control-Allow-Origin: *
Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization
Access-Control-Allow-Credentials: true
Cf-Cache-Status: DYNAMIC
Expect-Ct: max-age=604800, report-uri="https://report-uri.cloudflare.com/cdn-cgi/beacon/expect-ct"
Report-To: {"endpoints":[{"url":"https:\/\/a.nel.cloudflare.com\/report\/v3?s=tx1yDeM6cb1ce%2F0iJcicGwR7oM8IHJQx5EVYmiEd3lIYF28Ef%2F4Uf%2FPqpfxS5eVEPytO%2FPdb3WMQapW3SnsaD1127AdBeDqtnG6H5vKZHrKM32kGmWbX9xIf78Q5J2FK9mhW"}],"group":"cf-nel","max_age":604800}
Nel: {"success_fraction":0,"report_to":"cf-nel","max_age":604800}
Server: cloudflare
Cf-Ray: 717ac74def6a9fa1-SIN
Alt-Svc: h3=":443"; ma=86400, h3-29=":443"; ma=86400

{"status":1,"message":"OTP Sent"} -->

<!-- isidata -->
<!-- POST /system/api/newregistration HTTP/2
Host: api.mcontent.net
Accept: application/json, text/plain, */*
Content-Type: application/x-www-form-urlencoded
Content-Length: 231
Accept-Encoding: gzip, deflate
User-Agent: okhttp/4.9.1

{"otp":"8198","email":"danisalaman123@ptsuroyya.my.id","pass":"Kaserinas123@","p_num":"+6281932435109","dob":"08/06/1999","gen":"Female","username":"danisalaman","type":"user","referral":null,"wallet_id":"61b6f997c136e86dc9459492"} -->
<!-- HTTP/2 200 OK
Date: Tue, 07 Jun 2022 16:32:22 GMT
Content-Type: application/json
Access-Control-Allow-Origin: *
Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization
Access-Control-Allow-Credentials: true
Cf-Cache-Status: DYNAMIC
Expect-Ct: max-age=604800, report-uri="https://report-uri.cloudflare.com/cdn-cgi/beacon/expect-ct"
Report-To: {"endpoints":[{"url":"https:\/\/a.nel.cloudflare.com\/report\/v3?s=nlLjwXTeAQcj0CqglS5%2Bm%2BChPPudjBK54p3Af0ak1BizSFBbDFTbC6RU%2BNQJsxax6B6m0o%2FrJGJBlZkbkP2tI4V12il%2BdYTMa3%2B5CKamzUaJd0%2FYJCpAKy6BEVYplGuRICYk"}],"group":"cf-nel","max_age":604800}
Nel: {"success_fraction":0,"report_to":"cf-nel","max_age":604800}
Server: cloudflare
Cf-Ray: 717ac885e9740197-SIN
Alt-Svc: h3=":443"; ma=86400, h3-29=":443"; ma=86400

{"bearer":"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2NTQ2MTk1NDEsImlzcyI6Ind3dy5tY29udGVudC5uZXQiLCJuYmYiOjE2NTQ2MTk1NDEsImV4cCI6MTY1NDYyMDYyMSwidXNlck5hbWUiOiJkYW5pc2FsYW1hbjEyM0BwdHN1cm95eWEubXkuaWQiLCJzZXJ2ZXJOYW1lIjoid3d3Lm1jb250ZW50Lm5ldCIsIm90cCI6IjI0MzgiLCJtYWlsIjoiZGFuaXNhbGFtYW4xMjNAcHRzdXJveXlhLm15LmlkIiwidXNlcmlkIjoiNjI5ZjdkOTVhODY3M2IwMjU0MzcxZDczIiwiZ2VuZGVyIjoiRmVtYWxlIiwibW9iaWxlIjoiKzYyODE5MzI0MzUxMDkifQ.cA8Z6UouUTNPySJUFqJyJogJ3d96U9_XT-cWBlL_U4k","refreshToken":"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2NTQ2MTk1NDEsImlzcyI6Ind3dy5tY29udGVudC5uZXQiLCJuYmYiOjE2NTQ2MTk1NDEsImV4cCI6bnVsbCwidXNlck5hbWUiOiJkYW5pc2FsYW1hbjEyM0BwdHN1cm95eWEubXkuaWQiLCJzZXJ2ZXJOYW1lIjoid3d3Lm1jb250ZW50Lm5ldCIsIm90cCI6IjI0MzgiLCJtYWlsIjoiZGFuaXNhbGFtYW4xMjNAcHRzdXJveXlhLm15LmlkIiwidXNlcmlkIjoiNjI5ZjdkOTVhODY3M2IwMjU0MzcxZDczIiwiZ2VuZGVyIjoiRmVtYWxlIiwibW9iaWxlIjoiKzYyODE5MzI0MzUxMDkifQ.HEkAoi0ogh3zzZMeTamA03TwHn2G1D7zQLG_3xQfPVY","message":"data inserted","status":"1"} -->
<!-- getdataaccount -->
<!-- POST /system/api/userinfo HTTP/2
Host: api.mcontent.net
Accept: application/json, text/plain, */*
Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2NTQ2MTk1NDEsImlzcyI6Ind3dy5tY29udGVudC5uZXQiLCJuYmYiOjE2NTQ2MTk1NDEsImV4cCI6MTY1NDYyMDYyMSwidXNlck5hbWUiOiJkYW5pc2FsYW1hbjEyM0BwdHN1cm95eWEubXkuaWQiLCJzZXJ2ZXJOYW1lIjoid3d3Lm1jb250ZW50Lm5ldCIsIm90cCI6IjI0MzgiLCJtYWlsIjoiZGFuaXNhbGFtYW4xMjNAcHRzdXJveXlhLm15LmlkIiwidXNlcmlkIjoiNjI5ZjdkOTVhODY3M2IwMjU0MzcxZDczIiwiZ2VuZGVyIjoiRmVtYWxlIiwibW9iaWxlIjoiKzYyODE5MzI0MzUxMDkifQ.cA8Z6UouUTNPySJUFqJyJogJ3d96U9_XT-cWBlL_U4k
Content-Length: 0
Accept-Encoding: gzip, deflate
User-Agent: okhttp/4.9.1 -->

<!-- respone -->
<!-- HTTP/2 200 OK
Date: Tue, 07 Jun 2022 16:32:25 GMT
Content-Type: application/json
Vary: Authorization
Access-Control-Allow-Origin: *
Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization
Access-Control-Allow-Credentials: true
Cf-Cache-Status: DYNAMIC
Expect-Ct: max-age=604800, report-uri="https://report-uri.cloudflare.com/cdn-cgi/beacon/expect-ct"
Report-To: {"endpoints":[{"url":"https:\/\/a.nel.cloudflare.com\/report\/v3?s=bkYYkwyce9sq5E7ALlWrRfFz%2FJs7HiE7njSBqOnyjAjOCkkgvC6alxE1tp0jeO5eRy7lAy8SgbQ7ZuVpC4bZiB5KluinsWUT6nau49Z0SRJsyZIt94QhZ2ly3vSy6Zovw8FI"}],"group":"cf-nel","max_age":604800}
Nel: {"success_fraction":0,"report_to":"cf-nel","max_age":604800}
Server: cloudflare
Cf-Ray: 717ac88aae3b0197-SIN
Alt-Svc: h3=":443"; ma=86400, h3-29=":443"; ma=86400

{"message":"Successfull.","status":"1","data":{"username":"danisalaman","profile_img":"","mbrowse_videos":0,"mseed_videos":0,"subscribers":0,"total_tokens":0,"verify":"","about":{"_id":{"$oid":"629f7d95a8673b0254371d73"},"username":"danisalaman","password":"e5d87e1979ee9a1e90ed420927f75c7f","email":"danisalaman123@ptsuroyya.my.id","firstname":"","lastname":"","mobile":"+6281932435109","dob":"08\/06\/1999","about_me":"","gender":"Female","language":null,"work_history":null,"professional_skills":null,"education":null,"interested":null,"location":null,"profession":"","referral_userid":"","type":"user","token":"t32HoWTOmbWC4MXEoQATfKsFEZlzEgo5JJDkbMBw","profile_url":"","status":"active","created":"07-06-2022 22:02:21","updated":"07-06-2022 22:02:21","datetime":1654619541,"verificationstatus":""},"issubscribed":"","channel_url":null}} -->