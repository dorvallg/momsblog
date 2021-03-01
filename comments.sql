DROP TABLE IF EXISTS comments;
CREATE TABLE comments(
  id SERIAL PRIMARY KEY,
  u_name TEXT,
  u_comment TEXT
);