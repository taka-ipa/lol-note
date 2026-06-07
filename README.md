# LOL Note

## 概要

LoLの対面研究・動画研究を記録するための個人向けノートアプリ

## 使用技術

### Backend

* Laravel 12
* PHP 8.4
* MySQL 8

### Frontend

* Next.js 15
* TypeScript
* Tailwind CSS
* shadcn/ui

### Infrastructure

* Docker

## 開発環境起動

```bash
docker compose up -d
```

Frontend

```bash
http://localhost:3000
```

Backend

```bash
http://localhost:8000
```

## 開発ルール

### ブランチ

* main
* feature/xxx

### コミット

* feat:
* fix:
* refactor:
* docs:

### 開発フロー

1. featureブランチ作成
2. 開発
3. commit
4. push
5. mainへマージ
