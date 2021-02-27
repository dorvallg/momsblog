DROP TABLE IF EXISTS bet;
CREATE TABLE bet(
  id SERIAL PRIMARY KEY,
  user_name TEXT,
  user_message TEXT
);