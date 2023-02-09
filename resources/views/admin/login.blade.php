<div class="container">
    <div class="min_width">
        <div class="max_width">
            <div class="row">
                <div class="login-block">
                    <div class="admin-form">
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="bord">
                                <input name="email" type="text" value="" placeholder="Email">
                                @error('email')
                                {{ $message }}
                                @enderror
                            </div>
                            <div class="bord">
                                <input name="password" type="password" value="" placeholder="Пароль">
                                @error('password')
                                {{ $message }}
                                @enderror
                            </div>
                            <button type="submit" class="admin-button">Войти</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
