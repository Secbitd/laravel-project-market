<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Разместить новое объявление | Detail Deal</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Roboto+Mono:wght@400;700&family=Space+Mono:wght@400;700&family=Work+Sans:wght@600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background: #2B2B2B;
            color: #FFFFFF;
            min-height: 100vh;
            position: relative;
            width: 1440px;
            margin: 0 auto;
        }

        /* Navigation */
        .navigation {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            padding: 20px 156px;
            gap: 12px;
            position: absolute;
            width: 1440px;
            height: 152px;
            left: 0px;
            top: 0px;
            background: #2B2B2B;
        }

        .nav-main {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            padding: 0px;
            gap: 102px;
            width: 1128px;
            height: 60px;
        }

        .nav-logo {
            display: flex;
            flex-direction: row;
            align-items: center;
            padding: 0px;
            gap: 10px;
            width: 181px;
            height: 60px;
        }

        .logo-icon {
            width: 61px;
            height: 60px;
            background: #8ECAE6;
            border-radius: 50%;
        }

        .logo-text {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            padding: 0px;
            gap: 8px;
            width: 110px;
            height: 57px;
        }

        .logo-title {
            width: 108px;
            height: 21px;
            font-family: 'Roboto', sans-serif;
            font-style: normal;
            font-weight: 700;
            font-size: 18px;
            line-height: 21px;
            text-align: center;
            text-transform: uppercase;
            color: #FFFFFF;
        }

        .logo-subtitle {
            width: 110px;
            height: 28px;
            font-family: 'Roboto', sans-serif;
            font-style: normal;
            font-weight: 500;
            font-size: 12px;
            line-height: 14px;
            text-align: center;
            letter-spacing: 0.02em;
            color: #8ECAE6;
        }

        .nav-menu {
            display: flex;
            flex-direction: row;
            align-items: center;
            padding: 0px;
            gap: 10px;
            width: 416px;
            height: 46px;
        }

        .nav-button {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            padding: 0px 20px;
            gap: 12px;
            height: 46px;
            border-radius: 20px;
            background: transparent;
            border: none;
            color: #FFFFFF;
            font-family: 'Work Sans', sans-serif;
            font-weight: 600;
            font-size: 16px;
            line-height: 140%;
            cursor: pointer;
            transition: background 0.3s;
        }

        .nav-button:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        .nav-user {
            display: flex;
            flex-direction: row;
            align-items: center;
            padding: 0px;
            gap: 40px;
            width: 445px;
            height: 60px;
        }

        .user-avatar {
            width: 96px;
            height: 60px;
            position: relative;
        }

        .avatar-img {
            width: 60px;
            height: 60px;
            border-radius: 20px;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="%238ECAE6"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>') center/cover;
        }

        .logout-btn {
            position: absolute;
            width: 24px;
            height: 24px;
            right: 0;
            top: 19px;
            background: none;
            border: none;
            cursor: pointer;
        }

        .logout-icon {
            width: 24px;
            height: 24px;
        }

        /* Breadcrumb */
        .breadcrumb {
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            align-items: flex-start;
            padding: 0px;
            position: absolute;
            width: 469px;
            height: 56px;
            left: 156px;
            top: 152px;
        }

        .breadcrumb-text {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            padding: 0px;
            width: 247px;
            height: 16px;
        }

        .breadcrumb-items {
            display: flex;
            flex-direction: row;
            align-items: center;
            padding: 0px;
            gap: 12px;
            width: 247px;
            height: 16px;
        }

        .breadcrumb-home {
            width: 51px;
            height: 16px;
            font-family: 'Roboto', sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 13px;
            line-height: 16px;
            display: flex;
            align-items: center;
            text-align: center;
            font-variant: all-small-caps;
            color: #858584;
            text-decoration: none;
        }

        .breadcrumb-separator {
            width: 4px;
            height: 4px;
            background: #858584;
            border-radius: 1px;
        }

        .breadcrumb-current {
            width: 151px;
            height: 16px;
            font-family: 'Roboto', sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 13px;
            line-height: 16px;
            display: flex;
            align-items: center;
            text-align: center;
            font-variant: all-small-caps;
            color: #858584;
        }

        .page-title {
            width: 469px;
            height: 40px;
            font-family: 'Roboto', sans-serif;
            font-style: normal;
            font-weight: 700;
            font-size: 32px;
            line-height: 40px;
            display: flex;
            align-items: center;
            text-align: center;
            color: #51ADD9;
        }

        /* Main Content */
        .main-content {
            position: absolute;
            width: 1440px;
            height: 820px;
            left: 0px;
            top: 220px;
            background: #3B3B3B;
        }

        .form-container {
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            padding: 0px;
            gap: 24px;
            position: absolute;
            width: 1128px;
            height: 780px;
            left: 156px;
            top: 240px;
        }

        .form-main {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            padding: 0px;
            gap: 12px;
            width: 648px;
            height: 780px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            padding: 0px;
            gap: 8px;
            width: 648px;
        }

        .form-label {
            width: 614px;
            height: 16px;
            font-family: 'Roboto', sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 16px;
            color: #FFFFFF;
        }

        .form-input {
            box-sizing: border-box;
            display: flex;
            flex-direction: row;
            align-items: center;
            padding: 16px 20px;
            gap: 12px;
            width: 648px;
            height: 46px;
            background: #FFFFFF;
            border: 1px solid #858584;
            border-radius: 20px;
            font-family: 'Roboto', sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 140%;
            color: #858584;
        }

        .form-input:focus {
            outline: none;
            border-color: #51ADD9;
            color: #000000;
        }

        .form-textarea {
            box-sizing: border-box;
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            padding: 16px 20px;
            gap: 12px;
            width: 648px;
            height: 100px;
            background: #FFFFFF;
            border: 1px solid #858584;
            border-radius: 20px;
            font-family: 'Roboto', sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 140%;
            color: #858584;
            resize: vertical;
        }

        .form-textarea:focus {
            outline: none;
            border-color: #51ADD9;
            color: #000000;
        }

        .form-row {
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            padding: 0px;
            gap: 20px;
            width: 648px;
            height: 70px;
        }

        .form-col {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            padding: 0px;
            gap: 8px;
            width: 314px;
            height: 70px;
        }

        .form-col .form-input {
            width: 314px;
        }

        .form-select {
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='8' viewBox='0 0 16 8'%3E%3Cpath d='M2 0L8 6L14 0' stroke='%23858584' stroke-width='2' fill='none'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 20px center;
            background-size: 16px 8px;
        }

        .checkbox-group {
            display: flex;
            flex-direction: row;
            align-items: center;
            padding: 0px;
            gap: 12px;
            width: 314px;
            height: 20px;
        }

        .checkbox {
            width: 16px;
            height: 16px;
            border: 1px solid #FFFFFF;
            border-radius: 4px;
            background: transparent;
            cursor: pointer;
        }

        .checkbox:checked {
            background: #51ADD9;
            border-color: #51ADD9;
        }

        .checkbox-label {
            width: 296px;
            height: 20px;
            font-family: 'Roboto', sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 20px;
            display: flex;
            align-items: center;
            text-align: center;
            color: #FFFFFF;
        }

        .add-material-btn {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            padding: 0px 30px;
            gap: 12px;
            width: 80px;
            height: 46px;
            background: #1A7FAE;
            border-radius: 20px;
            border: none;
            color: #FFFFFF;
            cursor: pointer;
        }

        .add-icon {
            width: 20px;
            height: 20px;
            position: relative;
        }

        .add-icon::before,
        .add-icon::after {
            content: '';
            position: absolute;
            background: #FFFFFF;
        }

        .add-icon::before {
            left: 50%;
            top: 0;
            bottom: 0;
            width: 2px;
            transform: translateX(-50%);
        }

        .add-icon::after {
            top: 50%;
            left: 0;
            right: 0;
            height: 2px;
            transform: translateY(-50%);
        }

        .form-note {
            width: 614px;
            height: 16px;
            font-family: 'Roboto', sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 13px;
            line-height: 16px;
            color: #858584;
        }

        .form-buttons {
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            padding: 0px;
            gap: 12px;
            width: 648px;
            height: 46px;
        }

        .btn-primary {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            padding: 0px 50px;
            gap: 12px;
            width: 436px;
            height: 46px;
            background: linear-gradient(98.04deg, #8ECAE6 2.59%, #1A7FAE 98.96%);
            border-radius: 20px;
            border: none;
            color: #FFFFFF;
            font-family: 'Roboto', sans-serif;
            font-style: normal;
            font-weight: 700;
            font-size: 18px;
            line-height: 140%;
            cursor: pointer;
            transition: transform 0.2s;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
        }

        .btn-secondary {
            box-sizing: border-box;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            padding: 0px 50px;
            gap: 12px;
            width: 200px;
            height: 46px;
            background: transparent;
            border: 2px solid #51ADD9;
            border-radius: 20px;
            color: #FFFFFF;
            font-family: 'Roboto', sans-serif;
            font-style: normal;
            font-weight: 700;
            font-size: 18px;
            line-height: 140%;
            cursor: pointer;
            transition: background 0.3s;
        }

        .btn-secondary:hover {
            background: rgba(81, 173, 217, 0.1);
        }

        /* File Upload */
        .file-upload {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            padding: 0px;
            gap: 12px;
            width: 456px;
            height: 462px;
        }

        .upload-area {
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 16px 20px;
            gap: 12px;
            width: 456px;
            height: 174px;
            background: #FFFFFF;
            border: 1px solid #858584;
            border-radius: 20px;
            cursor: pointer;
            transition: border-color 0.3s;
        }

        .upload-area:hover {
            border-color: #51ADD9;
        }

        .camera-icon {
            width: 60px;
            height: 60px;
            position: relative;
        }

        .camera-icon::before {
            content: '';
            position: absolute;
            left: 8.33%;
            right: 8.33%;
            top: 16.67%;
            bottom: 16.67%;
            border: 3px solid #858584;
            border-radius: 8px;
        }

        .camera-icon::after {
            content: '';
            position: absolute;
            left: 37.5%;
            right: 37.5%;
            top: 41.67%;
            bottom: 33.33%;
            border: 3px solid #858584;
            border-radius: 50%;
        }

        .upload-text {
            width: 416px;
            height: 22px;
            font-family: 'Roboto', sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 140%;
            text-align: center;
            color: #000000;
        }

        .image-preview {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            align-items: flex-start;
            align-content: flex-start;
            padding: 0px;
            gap: 12px;
            width: 456px;
            height: 252px;
        }

        .image-item {
            width: 168px;
            height: 120px;
            position: relative;
            border-radius: 4px;
            overflow: hidden;
        }

        .image-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .image-overlay {
            position: absolute;
            width: 168px;
            height: 27px;
            left: 0px;
            bottom: 0px;
            background: rgba(43, 43, 43, 0.9);
            border-radius: 0px 0px 4px 4px;
            display: flex;
            flex-direction: row;
            align-items: center;
            padding: 0px;
            gap: 8px;
        }

        .delete-btn {
            display: flex;
            flex-direction: row;
            align-items: center;
            padding: 0px;
            gap: 8px;
            position: absolute;
            width: 67px;
            height: 17px;
            left: 50px;
            top: 98px;
        }

        .delete-icon {
            width: 12px;
            height: 12px;
            position: relative;
        }

        .delete-icon::before,
        .delete-icon::after {
            content: '';
            position: absolute;
            background: #FFFFFF;
        }

        .delete-icon::before {
            left: 12.5%;
            right: 12.5%;
            top: 25%;
            bottom: 75%;
            width: 1px;
        }

        .delete-icon::after {
            left: 20.83%;
            right: 20.83%;
            top: 25%;
            bottom: 8.33%;
            height: 1px;
        }

        .delete-text {
            width: 47px;
            height: 17px;
            font-family: 'Roboto', sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 12px;
            line-height: 140%;
            display: flex;
            align-items: center;
            text-align: center;
            color: #FFFFFF;
            cursor: pointer;
        }

        /* Footer */
        .footer {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px 152px 40px 156px;
            gap: 30px;
            position: absolute;
            width: 1440px;
            height: 273px;
            left: 0px;
            bottom: 2px;
            background: #3B3B3B;
        }

        .footer-content {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: flex-start;
            padding: 0px;
            gap: 31px;
            width: 1132px;
            height: 193px;
        }

        .footer-section {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            padding: 0px;
            gap: 20px;
        }

        .footer-title {
            font-family: 'Roboto Mono', monospace;
            font-style: normal;
            font-weight: 700;
            font-size: 22px;
            line-height: 160%;
            text-transform: capitalize;
            color: #FFFFFF;
        }

        .footer-text {
            font-family: 'Roboto', sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 140%;
            color: #CCCCCC;
        }

        .footer-links {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            padding: 0px;
            gap: 20px;
        }

        .footer-link {
            font-family: 'Space Mono', monospace;
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 140%;
            text-decoration-line: underline;
            color: #FFFFFF;
        }

        .social-icons {
            display: flex;
            flex-direction: row;
            align-items: flex-end;
            padding: 0px;
            gap: 24px;
            width: 186px;
            height: 32px;
        }

        .social-icon {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: #0077FF;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #FFFFFF;
            text-decoration: none;
            font-weight: bold;
            font-size: 14px;
        }

        .subscribe-form {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            padding: 0px;
            gap: 12px;
            width: 420px;
            height: 138px;
        }

        .subscribe-input-group {
            display: flex;
            flex-direction: row;
            align-items: center;
            padding: 16px 0px 16px 20px;
            gap: 12px;
            width: 420px;
            height: 60px;
            background: #FFFFFF;
            border-radius: 20px;
        }

        .subscribe-input {
            width: 189px;
            height: 22px;
            font-family: 'Roboto', sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 140%;
            color: #2B2B2B;
            border: none;
            background: transparent;
            outline: none;
        }

        .subscribe-btn {
            display: flex;
            flex-direction: row;
            justify-content: flex-end;
            align-items: center;
            padding: 0px 50px;
            gap: 12px;
            width: 199px;
            height: 60px;
            background: #1A7FAE;
            border-radius: 20px;
            border: none;
            color: #FFFFFF;
            font-family: 'Roboto', sans-serif;
            font-style: normal;
            font-weight: 600;
            font-size: 16px;
            line-height: 140%;
            text-align: center;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navigation">
        <div class="nav-main">
            <div class="nav-logo">
                <div class="logo-icon"></div>
                <div class="logo-text">
                    <div class="logo-title">Detail Deal</div>
                    <div class="logo-subtitle">Онлайн-сервис по металлообработке</div>
                </div>
            </div>
            
            <div class="nav-menu">
                <button class="nav-button">Marketplace</button>
                <button class="nav-button">Rankings</button>
                <button class="nav-button">Чаты</button>
            </div>
            
            <div class="nav-user">
                <div class="user-avatar">
                    <div class="avatar-img"></div>
                    <button class="logout-btn">
                        <svg class="logout-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Breadcrumb -->
    <div class="breadcrumb">
        <div class="breadcrumb-text">
            <div class="breadcrumb-items">
                <a href="#" class="breadcrumb-home">главная</a>
                <div class="breadcrumb-separator"></div>
                <div class="breadcrumb-current">разместить объявление</div>
            </div>
        </div>
        <h1 class="page-title">Разместить новое объявление</h1>
    </div>

    <!-- Main Content -->
    <main class="main-content">
        <form class="form-container" action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <!-- Left Column - Main Form -->
            <div class="form-main">
                <div class="form-group">
                    <label class="form-label">Название объявления или услуги *</label>
                    <input type="text" name="title" class="form-input" placeholder="Название объявления или услуги" required>
                </div>

                <div class="form-row">
                    <div class="form-col">
                        <label class="form-label">Категория *</label>
                        <select name="category_id" class="form-input form-select" required>
                            <option value="">Выберите категорию</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-col">
                        <label class="form-label">Бюджет *</label>
                        <input type="number" name="budget" class="form-input" placeholder="Бюджет" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Описание объявления или услуги *</label>
                    <textarea name="description" class="form-textarea" placeholder="Описание объявления или услуги" required></textarea>
                </div>

                <div class="form-row">
                    <div class="form-col">
                        <label class="form-label">Материалы</label>
                        <input type="text" name="materials" class="form-input" placeholder="Материалы">
                    </div>
                    
                    <button type="button" class="add-material-btn">
                        <div class="add-icon"></div>
                    </button>
                </div>

                <div class="form-group">
                    <label class="form-label">Местоположение</label>
                    <input type="text" name="location" class="form-input" placeholder="Местоположение">
                </div>

                <div class="form-row">
                    <div class="form-col">
                        <label class="form-label">Срок выполнения</label>
                        <input type="date" name="deadline" class="form-input">
                    </div>
                    
                    <div class="form-col">
                        <label class="form-label">Объем выполнения *</label>
                        <select name="volume" class="form-input form-select" required>
                            <option value="">Любой</option>
                            <option value="small">Малый</option>
                            <option value="medium">Средний</option>
                            <option value="large">Большой</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-col">
                        <label class="form-label">Детальное описание объявления или услуги</label>
                        <textarea name="detailed_description" class="form-textarea" placeholder="Детальное описание объявления или услуги"></textarea>
                    </div>
                    
                    <div class="checkbox-group">
                        <input type="checkbox" name="urgent" class="checkbox" id="urgent">
                        <label for="urgent" class="checkbox-label">Возможность выполнить заказ срочно</label>
                    </div>
                </div>

                <div class="form-note">Пункты помеченные * - обязательны для заполнения</div>

                <div class="form-buttons">
                    <button type="submit" class="btn-primary">Разместить объявление</button>
                    <button type="button" class="btn-secondary">Отмена</button>
                </div>
            </div>

            <!-- Right Column - File Upload -->
            <div class="file-upload">
                <div class="form-group">
                    <label class="form-label">Добавьте приложения (фото, чертежи, документы)</label>
                    
                    <div class="upload-area" onclick="document.getElementById('fileInput').click()">
                        <div class="camera-icon"></div>
                        <div class="upload-text">Добавить фото</div>
                    </div>
                    <input type="file" id="fileInput" name="images[]" multiple accept="image/*" style="display: none;">
                </div>

                <div class="image-preview" id="imagePreview">
                    <!-- Preview images will be added here dynamically -->
                </div>
            </div>
        </form>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section" style="width: 327.41px;">
                <h3 class="footer-title">Detail Deal</h3>
                <div style="width: 328px; height: 126px;">
                    <p class="footer-text">Онлайн-сервис по металлообработке</p>
                    <div style="margin-top: 20px;">
                        <p class="footer-text">Подпишитесь на наши соц. сети</p>
                        <div class="social-icons">
                            <a href="#" class="social-icon">VK</a>
                            <a href="#" class="social-icon">TG</a>
                            <a href="#" class="social-icon">RT</a>
                            <a href="#" class="social-icon">YT</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-section" style="width: 232px;">
                <h3 class="footer-title">Страницы</h3>
                <div class="footer-links">
                    <a href="#" class="footer-link">Объявления</a>
                    <a href="#" class="footer-link">Заказы</a>
                    <a href="#" class="footer-link">Чаты</a>
                </div>
            </div>

            <div class="footer-section" style="width: 460px;">
                <h3 class="footer-title">Заинтересовались?</h3>
                <div class="subscribe-form">
                    <p class="footer-text">Оставьте свою электронную почту и подпишитесь на нашу рассылку, чтобы всегда быть в курсе наших новостей</p>
                    <div class="subscribe-input-group">
                        <input type="email" class="subscribe-input" placeholder="Enter your email here">
                        <button class="subscribe-btn">Подписаться</button>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // File upload preview
        document.getElementById('fileInput').addEventListener('change', function(e) {
            const files = e.target.files;
            const preview = document.getElementById('imagePreview');
            
            for (let i = 0; i < files.length; i++) {
                const file = files[i];
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    const imageItem = document.createElement('div');
                    imageItem.className = 'image-item';
                    
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    
                    const overlay = document.createElement('div');
                    overlay.className = 'image-overlay';
                    
                    const deleteBtn = document.createElement('div');
                    deleteBtn.className = 'delete-btn';
                    deleteBtn.innerHTML = `
                        <div class="delete-icon"></div>
                        <div class="delete-text">Удалить</div>
                    `;
                    
                    overlay.appendChild(deleteBtn);
                    imageItem.appendChild(img);
                    imageItem.appendChild(overlay);
                    preview.appendChild(imageItem);
                    
                    deleteBtn.addEventListener('click', function() {
                        imageItem.remove();
                    });
                };
                
                reader.readAsDataURL(file);
            }
        });

        // Form submission
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            // Add form validation and submission logic here
            this.submit();
        });
    </script>
</body>
</html>
