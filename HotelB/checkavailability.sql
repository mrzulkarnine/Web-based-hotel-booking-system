SELECT r.room_id, (r.total_room-b.totalroombook) as availableroom from room as r 
LEFT JOIN ( 
SELECT b.room_id, sum(b.totalroombook) as totalroombook from booking as b where
((b.checkin_date between '2014-11-01' AND '2014-11-03') OR (b.checkout_date between '2014-11-01' AND '2014-11-03'))
AND totalroombook
GROUP BY b.room_id ) as b 
ON r.room_id = b.room_id
 
-------------------------------------------------


SELECT
     A.REGISTRATION_ID, A.Fee_type, A.AMOUNT, B.AMOUNT AS PAID, (A.AMOUNT - B.AMOUNT) AS DUE
FROM
    TABLE1 AS A
    CROSS APPLY (SELECT SUM(AMOUNT) AS AMOUNT FROM TABLE2 WHERE REGISTRATION_ID = '1001' AND Fee_type = 'admission_fee' GROUP BY Fee_type) AS B
WHERE
    A.REGISTRATION_ID = '1001'
    AND A.Fee_type = 'admission_fee'
	
	
------------------------------------------------
