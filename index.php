<?php
session_start();

// Simple routing system
$page = $_GET['page'] ?? 'home';
$action = $_GET['action'] ?? '';

// Basic form processing logic
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $page === 'create-order') {
    // Here you would typically:
    // 1. Validate the input data
    // 2. Save to database
    // 3. Redirect or show success message
    
    $order_name = $_POST['order_name'] ?? '';
    $category = $_POST['category'] ?? '';
    $budget = $_POST['budget'] ?? '';
    $description = $_POST['description'] ?? '';
    $materials = $_POST['materials'] ?? '';
    $location = $_POST['location'] ?? '';
    $completion_date = $_POST['completion_date'] ?? '';
    $technical_requirements = $_POST['technical_requirements'] ?? '';
    
    // For now, just store in session for demonstration
    $_SESSION['form_data'] = $_POST;
    $_SESSION['success_message'] = 'Заказ успешно размещен!';
    
    // Redirect to prevent form resubmission
    header('Location: index.php?page=create-order&success=1');
    exit();
}

// Handle success message display
$show_success = isset($_GET['success']) && $_GET['success'] === '1';
if ($show_success) {
    $success_message = $_SESSION['success_message'] ?? '';
    unset($_SESSION['success_message']);
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= getPageTitle($page) ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-sm border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-8">
                    <h1 class="text-xl font-semibold text-gray-900">Market</h1>
                    <nav class="hidden md:flex space-x-6">
                        <a href="?page=orders-feed" class="text-gray-600 hover:text-gray-900 <?= $page === 'orders-feed' ? 'text-blue-600 font-medium' : '' ?>">Лента заказов</a>
                        <a href="?page=performers" class="text-gray-600 hover:text-gray-900 <?= $page === 'performers' ? 'text-blue-600 font-medium' : '' ?>">Исполнители</a>
                        <a href="?page=my-orders" class="text-gray-600 hover:text-gray-900 <?= $page === 'my-orders' ? 'text-blue-600 font-medium' : '' ?>">Мои заказы</a>
                        <a href="?page=messages" class="text-gray-600 hover:text-gray-900 <?= $page === 'messages' ? 'text-blue-600 font-medium' : '' ?>">Сообщения</a>
                        <a href="?page=profile" class="text-gray-600 hover:text-gray-900 <?= $page === 'profile' ? 'text-blue-600 font-medium' : '' ?>">Профиль</a>
                    </nav>
                </div>
                <button onclick="window.location.href='?page=create-order'" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                    Создать заказ
                </button>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-4xl mx-auto px-4 py-8">
        <?php if ($page === 'create-order'): ?>
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Разместить новое объявление/услугу/заказ</h2>
                
                <?php if ($show_success): ?>
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                        <?= htmlspecialchars($success_message) ?>
                    </div>
                <?php endif; ?>

                <form method="POST" action="?page=create-order" class="space-y-6">
                <!-- Order Name -->
                <div>
                    <label for="order_name" class="block text-sm font-medium text-gray-700 mb-2">
                        Название заказа <span class="text-red-500">*</span>
                    </label>
                    <input 
                        type="text" 
                        id="order_name" 
                        name="order_name" 
                        required
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors"
                        placeholder="Введите название заказа"
                        value="<?= htmlspecialchars($_POST['order_name'] ?? '') ?>"
                    >
                </div>

                <!-- Category -->
                <div>
                    <label for="category" class="block text-sm font-medium text-gray-700 mb-2">
                        Категория <span class="text-red-500">*</span>
                    </label>
                    <select 
                        id="category" 
                        name="category" 
                        required
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors"
                    >
                        <option value="">Выберите категорию</option>
                        <option value="programming" <?= (($_POST['category'] ?? '') === 'programming') ? 'selected' : '' ?>>Программирование</option>
                        <option value="design" <?= (($_POST['category'] ?? '') === 'design') ? 'selected' : '' ?>>Дизайн</option>
                        <option value="marketing" <?= (($_POST['category'] ?? '') === 'marketing') ? 'selected' : '' ?>>Маркетинг</option>
                        <option value="writing" <?= (($_POST['category'] ?? '') === 'writing') ? 'selected' : '' ?>>Копирайтинг</option>
                        <option value="other" <?= (($_POST['category'] ?? '') === 'other') ? 'selected' : '' ?>>Другое</option>
                    </select>
                </div>

                <!-- Budget -->
                <div>
                    <label for="budget" class="block text-sm font-medium text-gray-700 mb-2">
                        Бюджет <span class="text-red-500">*</span>
                    </label>
                    <input 
                        type="text" 
                        id="budget" 
                        name="budget" 
                        required
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors"
                        placeholder="Укажите бюджет"
                        value="<?= htmlspecialchars($_POST['budget'] ?? '') ?>"
                    >
                </div>

                <!-- Description -->
                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700 mb-2">
                        Описание заказа <span class="text-red-500">*</span>
                    </label>
                    <textarea 
                        id="description" 
                        name="description" 
                        required
                        rows="4"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors resize-none"
                        placeholder="Подробно опишите, что нужно сделать"
                    ><?= htmlspecialchars($_POST['description'] ?? '') ?></textarea>
                </div>

                <!-- Materials -->
                <div>
                    <label for="materials" class="block text-sm font-medium text-gray-700 mb-2">
                        Материалы
                    </label>
                    <textarea 
                        id="materials" 
                        name="materials" 
                        rows="3"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors resize-none"
                        placeholder="Укажите, какие материалы предоставите или какие нужны"
                    ><?= htmlspecialchars($_POST['materials'] ?? '') ?></textarea>
                </div>

                <!-- Location -->
                <div>
                    <label for="location" class="block text-sm font-medium text-gray-700 mb-2">
                        Местоположение
                    </label>
                    <input 
                        type="text" 
                        id="location" 
                        name="location"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors"
                        placeholder="Город, адрес (если важна геолокация)"
                        value="<?= htmlspecialchars($_POST['location'] ?? '') ?>"
                    >
                </div>

                <!-- Completion Date -->
                <div>
                    <label for="completion_date" class="block text-sm font-medium text-gray-700 mb-2">
                        Срок выполнения <span class="text-red-500">*</span>
                    </label>
                    <input 
                        type="date" 
                        id="completion_date" 
                        name="completion_date" 
                        required
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors"
                        value="<?= htmlspecialchars($_POST['completion_date'] ?? '') ?>"
                    >
                </div>

                <!-- Technical Requirements -->
                <div>
                    <label for="technical_requirements" class="block text-sm font-medium text-gray-700 mb-2">
                        Технические требования
                    </label>
                    <textarea 
                        id="technical_requirements" 
                        name="technical_requirements" 
                        rows="3"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors resize-none"
                        placeholder="Особые требования, технологии, формат и т.д."
                    ><?= htmlspecialchars($_POST['technical_requirements'] ?? '') ?></textarea>
                </div>

                <!-- Images -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Изображения
                    </label>
                    <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center hover:border-gray-400 transition-colors cursor-pointer">
                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <p class="mt-2 text-sm text-gray-600">
                            <span class="font-medium">Нажмите для загрузки</span> или перетащите файлы
                        </p>
                        <p class="text-xs text-gray-500">PNG, JPG, GIF до 10MB</p>
                        <input type="file" class="hidden" accept="image/*" multiple>
                    </div>
                </div>

                <!-- Form Buttons -->
                <div class="flex space-x-4 pt-6">
                    <button 
                        type="submit" 
                        class="flex-1 bg-blue-600 text-white py-3 px-6 rounded-lg hover:bg-blue-700 transition-colors font-medium"
                    >
                        Разместить заказ
                    </button>
                    <button 
                        type="button" 
                        onclick="window.history.back()"
                        class="flex-1 bg-gray-200 text-gray-800 py-3 px-6 rounded-lg hover:bg-gray-300 transition-colors font-medium"
                    >
                        Отмена
                    </button>
                </div>
            </form>
            </div>

            <!-- Tips Section -->
            <div class="bg-blue-50 rounded-lg p-6 mt-8">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Советы по созданию заказа</h3>
                <div class="grid md:grid-cols-2 gap-4 text-sm text-gray-700">
                    <div class="space-y-2">
                        <p>• <strong>Четкое название:</strong> Используйте понятные и конкретные формулировки</p>
                        <p>• <strong>Детальное описание:</strong> Чем больше деталей, тем лучше результат</p>
                        <p>• <strong>Реалистичный бюджет:</strong> Исследуйте рыночные цены</p>
                    </div>
                    <div class="space-y-2">
                        <p>• <strong>Четкие сроки:</strong> Укажите реалистичные даты выполнения</p>
                        <p>• <strong>Технические детали:</strong> Укажите все важные требования</p>
                        <p>• <strong>Визуальные материалы:</strong> Добавьте изображения для наглядности</p>
                    </div>
                </div>
            </div>

        <?php else: ?>
            <!-- Other pages content -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <?= getPageContent($page) ?>
            </div>
        <?php endif; ?>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white mt-16">
        <div class="max-w-7xl mx-auto px-4 py-8">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h4 class="font-semibold mb-4">О платформе</h4>
                    <ul class="space-y-2 text-sm text-gray-300">
                        <li><a href="#" class="hover:text-white">О нас</a></li>
                        <li><a href="#" class="hover:text-white">Как это работает</a></li>
                        <li><a href="#" class="hover:text-white">Контакты</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Для исполнителей</h4>
                    <ul class="space-y-2 text-sm text-gray-300">
                        <li><a href="#" class="hover:text-white">Стать исполнителем</a></li>
                        <li><a href="#" class="hover:text-white">Правила</a></li>
                        <li><a href="#" class="hover:text-white">Рейтинги</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Для заказчиков</h4>
                    <ul class="space-y-2 text-sm text-gray-300">
                        <li><a href="#" class="hover:text-white">Создать заказ</a></li>
                        <li><a href="#" class="hover:text-white">Безопасность</a></li>
                        <li><a href="#" class="hover:text-white">Поддержка</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Подписка</h4>
                    <p class="text-sm text-gray-300 mb-4">Получайте новости и обновления</p>
                    <div class="flex">
                        <input type="email" placeholder="Email" class="bg-gray-700 text-white px-3 py-2 rounded-l-lg flex-1 outline-none focus:bg-gray-600">
                        <button class="bg-blue-600 px-4 py-2 rounded-r-lg hover:bg-blue-700 transition-colors">
                            →
                        </button>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-sm text-gray-400">
                <p>© 2024 Market. Все права защищены.</p>
            </div>
        </div>
    </footer>
</body>
</html>

<?php
// Helper functions for routing
function getPageTitle($page) {
    $titles = [
        'home' => 'Market - Главная',
        'create-order' => 'Разместить новое объявление/услугу/заказ',
        'orders-feed' => 'Лента заказов',
        'performers' => 'Исполнители',
        'my-orders' => 'Мои заказы',
        'messages' => 'Сообщения',
        'profile' => 'Профиль'
    ];
    return $titles[$page] ?? 'Market';
}

function getPageContent($page) {
    switch ($page) {
        case 'orders-feed':
            return '<h2 class="text-2xl font-bold text-gray-900 mb-6">Лента заказов</h2>
                    <p class="text-gray-600 mb-4">Здесь будут отображаться доступные заказы от других пользователей.</p>
                    <div class="space-y-4">
                        <div class="border rounded-lg p-4 hover:shadow-md transition-shadow">
                            <h3 class="font-semibold text-lg mb-2">Пример заказа 1</h3>
                            <p class="text-gray-600 mb-2">Нужен сайт для небольшого бизнеса...</p>
                            <div class="flex justify-between items-center">
                                <span class="text-blue-600 font-medium">5 000 ₽</span>
                                <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Откликнуться</button>
                            </div>
                        </div>
                        <div class="border rounded-lg p-4 hover:shadow-md transition-shadow">
                            <h3 class="font-semibold text-lg mb-2">Пример заказа 2</h3>
                            <p class="text-gray-600 mb-2">Требуется дизайн логотипа...</p>
                            <div class="flex justify-between items-center">
                                <span class="text-blue-600 font-medium">3 000 ₽</span>
                                <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Откликнуться</button>
                            </div>
                        </div>
                    </div>';
            
        case 'performers':
            return '<h2 class="text-2xl font-bold text-gray-900 mb-6">Исполнители</h2>
                    <p class="text-gray-600 mb-4">Каталог проверенных исполнителей для ваших проектов.</p>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="border rounded-lg p-4 hover:shadow-md transition-shadow">
                            <div class="flex items-center mb-3">
                                <div class="w-12 h-12 bg-gray-300 rounded-full mr-3"></div>
                                <div>
                                    <h3 class="font-semibold">Иван Иванов</h3>
                                    <p class="text-sm text-gray-600">Веб-разработчик</p>
                                </div>
                            </div>
                            <p class="text-gray-600 text-sm mb-3">5 лет опыта, 50+ проектов</p>
                            <div class="flex justify-between items-center">
                                <span class="text-yellow-500">★ 4.8</span>
                                <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Написать</button>
                            </div>
                        </div>
                        <div class="border rounded-lg p-4 hover:shadow-md transition-shadow">
                            <div class="flex items-center mb-3">
                                <div class="w-12 h-12 bg-gray-300 rounded-full mr-3"></div>
                                <div>
                                    <h3 class="font-semibold">Мария Петрова</h3>
                                    <p class="text-sm text-gray-600">Дизайнер</p>
                                </div>
                            </div>
                            <p class="text-gray-600 text-sm mb-3">3 года опыта, 30+ проектов</p>
                            <div class="flex justify-between items-center">
                                <span class="text-yellow-500">★ 4.9</span>
                                <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Написать</button>
                            </div>
                        </div>
                    </div>';
            
        case 'my-orders':
            return '<h2 class="text-2xl font-bold text-gray-900 mb-6">Мои заказы</h2>
                    <p class="text-gray-600 mb-4">Управление вашими активными и завершенными заказами.</p>
                    <div class="space-y-4">
                        <div class="border rounded-lg p-4">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="font-semibold">Разработка лендинга</h3>
                                <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded text-sm">В работе</span>
                            </div>
                            <p class="text-gray-600 mb-3">Создание сайта для продвижения услуг...</p>
                            <div class="flex justify-between items-center">
                                <span class="text-blue-600 font-medium">10 000 ₽</span>
                                <button class="text-blue-600 hover:text-blue-800">Подробнее →</button>
                            </div>
                        </div>
                    </div>';
            
        case 'messages':
            return '<h2 class="text-2xl font-bold text-gray-900 mb-6">Сообщения</h2>
                    <p class="text-gray-600 mb-4">Чаты с исполнителями и заказчиками.</p>
                    <div class="space-y-3">
                        <div class="border rounded-lg p-4 hover:bg-gray-50 cursor-pointer">
                            <div class="flex justify-between items-center mb-2">
                                <h3 class="font-semibold">Иван Иванов</h3>
                                <span class="text-sm text-gray-500">2 часа назад</span>
                            </div>
                            <p class="text-gray-600 text-sm">Готов приступить к работе над проектом...</p>
                        </div>
                        <div class="border rounded-lg p-4 hover:bg-gray-50 cursor-pointer">
                            <div class="flex justify-between items-center mb-2">
                                <h3 class="font-semibold">Мария Петрова</h3>
                                <span class="text-sm text-gray-500">Вчера</span>
                            </div>
                            <p class="text-gray-600 text-sm">Отправила варианты дизайна на утверждение...</p>
                        </div>
                    </div>';
            
        case 'profile':
            return '<h2 class="text-2xl font-bold text-gray-900 mb-6">Профиль</h2>
                    <div class="flex items-center mb-6">
                        <div class="w-20 h-20 bg-gray-300 rounded-full mr-4"></div>
                        <div>
                            <h3 class="text-xl font-semibold">Пользователь</h3>
                            <p class="text-gray-600">user@example.com</p>
                            <button class="mt-2 text-blue-600 hover:text-blue-800">Редактировать профиль</button>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-3 gap-4 mb-6">
                        <div class="text-center p-4 border rounded-lg">
                            <div class="text-2xl font-bold text-blue-600">5</div>
                            <div class="text-gray-600">Активных заказов</div>
                        </div>
                        <div class="text-center p-4 border rounded-lg">
                            <div class="text-2xl font-bold text-green-600">12</div>
                            <div class="text-gray-600">Завершено</div>
                        </div>
                        <div class="text-center p-4 border rounded-lg">
                            <div class="text-2xl font-bold text-yellow-600">4.7</div>
                            <div class="text-gray-600">Рейтинг</div>
                        </div>
                    </div>
                    <h4 class="font-semibold mb-3">Настройки</h4>
                    <div class="space-y-3">
                        <button class="w-full text-left p-3 border rounded-lg hover:bg-gray-50">Уведомления</button>
                        <button class="w-full text-left p-3 border rounded-lg hover:bg-gray-50">Безопасность</button>
                        <button class="w-full text-left p-3 border rounded-lg hover:bg-gray-50">Платежные данные</button>
                    </div>';
            
        default:
            return '<h2 class="text-2xl font-bold text-gray-900 mb-6">Добро пожаловать в Market!</h2>
                    <p class="text-gray-600 mb-6">Платформа для поиска исполнителей и размещения заказов.</p>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="bg-blue-50 p-6 rounded-lg">
                            <h3 class="font-semibold text-lg mb-3">Ищете исполнителя?</h3>
                            <p class="text-gray-600 mb-4">Разместите заказ и получите отклики от проверенных специалистов.</p>
                            <button onclick="window.location.href=\'?page=create-order\'" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Создать заказ</button>
                        </div>
                        <div class="bg-green-50 p-6 rounded-lg">
                            <h3 class="font-semibold text-lg mb-3">Хотите работать?</h3>
                            <p class="text-gray-600 mb-4">Найдите интересные проекты и начните зарабатывать.</p>
                            <button onclick="window.location.href=\'?page=orders-feed\'" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Найти заказы</button>
                        </div>
                    </div>';
    }
}
?>
