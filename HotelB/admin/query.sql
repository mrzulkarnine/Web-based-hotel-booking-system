if firstname and booking are false

------
SELECT * FROM `booking` WHERE (checkin_date >= start and checkout_date < end) OR (checkout_date >= start and checkin_date < end)

------------------------------------------------------------------------------------------------------------


if firstname and booking and date are check 
------------------

SELECT * FROM `booking` WHERE (checkin_date >= start and checkout_date < end) OR (checkout_date >= start and checkin_date < end)
and first_name = 'bla' and booking_id = 'bla'

---------------------

-----------------------------------------
if first_name and booking are true but not date

SELECT * FROM `booking` and first_name = 'bla' and booking_id = 'bla'

------------------------------------------------