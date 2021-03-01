DROP TABLE IF EXISTS comment;
CREATE TABLE comment(
  id SERIAL PRIMARY KEY,
  u_name TEXT,
  u_comment TEXT
);