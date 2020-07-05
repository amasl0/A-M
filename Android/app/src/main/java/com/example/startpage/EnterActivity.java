package com.example.startpage;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;

import androidx.appcompat.app.AppCompatActivity;

public class EnterActivity extends AppCompatActivity {
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.enter_activity);
    }

    public void onClickRegButton(View view) {
        startActivity(new Intent(this, RegistrationActivity.class));
    }
}

