# Лабораторная работа №1: Nginx + Docker

## 👩‍💻 Автор
ФИО: Cизова Екатерина андреевна  
Группа: ПМ - 1

---

## 📌 Описание задания
Создать веб-сервер в Docker с использованием Nginx и подключить HTML-страницу.  
Результат доступен по адресу [http://localhost:8080](http://localhost:8080).

---

## ⚙️ Как запустить проект

1. Клонировать репозиторий:
   ```bash
   git clone <ссылка на репозиторий>
   cd nginx-lab
Запустить контейнеры:
```bash
docker-compose up -d --build
```
Открыть в браузере:
```http://localhost:8080```
📂 Содержимое проекта

```docker-compose.yml``` — описание сервиса Nginx

```code/index.html``` — главная HTML-страница

```screenshots/``` — все скриншоты

📸 Скриншоты работы

<img width="750" height="572" alt="image" src="https://github.com/user-attachments/assets/bd3b731a-6a4e-44ec-9db8-278bf11581f3" />
<img width="1280" height="255" alt="image" src="https://github.com/user-attachments/assets/c9e117a3-fd54-4ea2-866d-7d0ab83efa20" />
<img width="1280" height="720" alt="image" src="https://github.com/user-attachments/assets/01826e63-8f81-4c9a-9b04-637948d58e3b" />
<img width="1280" height="720" alt="image" src="https://github.com/user-attachments/assets/e975fced-d039-4d92-b053-c87d6597af9d" />
<img width="1280" height="720" alt="image" src="https://github.com/user-attachments/assets/47471844-2af2-4e5c-bc89-096c4442878e" />
<img width="907" height="906" alt="image" src="https://github.com/user-attachments/assets/0a22a51c-68e8-4414-a043-52334adbab15" />



✅ Результат
Сервер в Docker успешно запущен, Nginx отдаёт мою HTML-страницу.
