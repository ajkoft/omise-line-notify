# omise-line-notify
Notify user when user has charged via Naver Line
ปกติเวลามีคนจ่ายเงินจะไม่มีแจ้งเตือน ต้องเขียนระบบมารับเอง ดังนั้นผมจึงทำระบบแจ้งเตือนผ่านทางไลน์ เมื่อมีคนชำระเงินผ่าน  Omise  ขึ้นมา

เอาไปปรับใช้กันได้นะครับ

1. ต้องมี Line Notify Token ก่อน (สร้างได้ที่ https://medium.com/@nattaponsirikamonnet/%E0%B8%A1%E0%B8%B2%E0%B8%A5%E0%B8%AD%E0%B8%87-line-notify-%E0%B8%81%E0%B8%B1%E0%B8%99%E0%B9%80%E0%B8%96%E0%B8%AD%E0%B8%B0-%E0%B8%9E%E0%B8%B7%E0%B9%89%E0%B8%99%E0%B8%90%E0%B8%B2%E0%B8%99-65a7fc83d97f)

2. ต้องมี Omise API Key หาได้จากนี้ https://www.omise.co/quick-start-guide

3. โหลดไฟล์ zip ในนี้ และไปวางไว้ในเว็บของคุณด้วย folder ใหม่   เช่น   wpsos.com/abc   (ควรใช้ชื่อที่เดายาก ๆ คนไม่รู้นะครับเพื่อความปลอดภัย)  
4. สร้าง webhook ใน Omise Dashboard ตามชื่อเว็บของคุณจากหน้า    และตามด้วย /omise-line-notify.php   เช่น  http://www.wpsos.com/abc/omise-line-notify.php

5. Omise webhook สำหรับ test และ live จะไม่เหมือนกันนะ อย่าลืมใส่ หรือลองใส่ทั้งคู่ก็ได้
6. ใช้เฉพาะแจ้งเตือนการรับเงินเท่านั้น  ณ ตอนนี้ (Charge event เท่านั้น)


Change Log:
v1. ใช้แจ้งเตือนเมื่อมีการ Payment Charge 

สอบถามเพื่ิมเติม  ajkoft@gmail.com
