SELECT u.firstName, u.lastName, c.city
FROM user u
INNER JOIN city c on u.city = c.ID