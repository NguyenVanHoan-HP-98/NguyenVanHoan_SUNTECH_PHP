Tạo DB bằng command
Thực hiện select 

alter table categories add column created_at timestamp default now();
alter table categories add column updated_at timestamp default now();