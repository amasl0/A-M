package com.example.startpage;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import androidx.appcompat.app.AppCompatActivity;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
    }

    public void onClickEnterButton(View view) {
        Intent enterActivity = new Intent(MainActivity.this, EnterActivity.class);
        startActivity(enterActivity);
    }

    public void onClickRegButton(View view) {
        Intent regActivity = new Intent(MainActivity.this, RegistrationActivity.class);
        startActivity(regActivity);
    }
}