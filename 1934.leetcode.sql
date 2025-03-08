WITH ConfirmationCounts AS (
    SELECT 
        user_id,
        SUM(CASE WHEN action = 'confirmed' THEN 1 ELSE 0 END) AS confirmed_count,
        COUNT(*) AS total_count
    FROM Confirmations
    GROUP BY user_id
)
SELECT 
    s.user_id,
    COALESCE(ROUND(cc.confirmed_count / NULLIF(cc.total_count, 0), 2), 0) AS confirmation_rate
FROM Signups s
LEFT JOIN ConfirmationCounts cc ON s.user_id = cc.user_id
ORDER BY s.user_id;
