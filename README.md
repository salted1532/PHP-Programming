# PHP 웹프로그래밍

## 소개
이 저장소는 PHP 웹프로그래밍 수업의 주요 학습 내용을 정리한 자료를 포함합니다. 동적 웹 페이지 제작, API 활용, 데이터베이스 연동 등 다양한 주제를 다루며 학습 및 실습에 필요한 내용을 제공합니다.

## 목차
1. [QR 코드 생성](#1-qr-코드-생성)
2. [Google Chart API](#2-google-chart-api)
3. [Kakao Map 활용](#3-kakao-map-활용)
4. [Ajax 비동기 통신](#4-ajax-비동기-통신)
5. [서버 환경 설정](#5-서버-환경-설정)
6. [Form과 CRUD](#6-form과-crud)
7. [Cookie와 Session](#7-cookie와-session)

---

### 1. QR 코드 생성
- QR 코드를 생성하고 뷰하는 예제를 제공합니다.
- **qrgen.html**: QR 코드 생성기
- **qrcode.php**: QR 코드 이미지 출력

```html
https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl=Hello%20world&choe=UTF-8
```

---

### 2. Google Chart API
- Google Chart API를 활용하여 데이터를 시각화하는 방법을 학습합니다.
- 공식 문서: [Google Chart API](https://developers.google.com/chart)

---

### 3. Kakao Map 활용
- Kakao Map API를 이용하여 지도와 위치 정보를 표시하는 애플리케이션을 제작합니다.
- Kakao Developers: [공식 웹사이트](https://developers.kakao.com/)

---

### 4. Ajax 비동기 통신
- **Ajax**: JavaScript를 사용하여 비동기 요청으로 웹 페이지의 특정 부분을 갱신합니다.
- JSON 또는 XML 형식으로 데이터를 서버와 주고받는 방법을 다룹니다.
- 예제:
  - 데이터 API 사용: [Visit Korea API](http://api.visitkorea.or.kr)
  - XML 데이터 예시:

```xml
<response>
  <item>
    <title>강원</title>
    <description>강원도 관광 정보</description>
  </item>
</response>
```

---

### 5. 서버 환경 설정
- **Apache HTTPD, PHP, MySQL, phpMyAdmin 설치 및 설정**
1. Apache HTTPD와 PHP 설치
2. MySQL 데이터베이스 설치 및 기본 설정
3. phpMyAdmin 설정

#### PHP 환경 설정
- `php.ini` 파일 수정 예시:
```ini
extension_dir = "C:/_server/php-7.4.12-Win32-vc15-x64/ext"
extension=curl
extension=mbstring
date.timezone = Asia/Seoul
```

---

### 6. Form과 CRUD
- HTML 폼과 PHP를 사용하여 **CRUD**(Create, Read, Update, Delete) 구현.
- 데이터베이스 테이블 생성 예제:
```sql
CREATE TABLE member (
    id VARCHAR(6) PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
```

#### CRUD 관련 예제 링크
- [MySQL INSERT](https://www.w3schools.com/php/php_mysql_insert.asp)
- [MySQL SELECT](https://www.w3schools.com/php/php_mysql_select.asp)
- [MySQL UPDATE](https://www.w3schools.com/php/php_mysql_update.asp)
- [MySQL DELETE](https://www.w3schools.com/php/php_mysql_delete.asp)

---

### 7. Cookie와 Session
- **Cookie**: 클라이언트에 저장되는 작은 데이터 (로그인 상태, 장바구니 등).
- **Session**: 서버에서 관리하는 사용자 정보 (보안 강화).

#### 특징
1. **Cookie**: 클라이언트 측에 데이터 저장, 보안 문제 발생 가능.
2. **Session**: 서버 측에서 데이터 관리, 보안성이 더 높음.

---

## 과제
1. **Tour API**와 **Kakao Map API**를 활용한 애플리케이션 개발.
2. CRUD 기능 구현 프로젝트.

---

## 참고 교재
- **IT CookBook**: PHP 프로그래밍 입문(3판), 황재호, 한빛아카데미

---
