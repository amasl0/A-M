package com.example.startpage;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import androidx.appcompat.app.AppCompatActivity;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
    }

<<<<<<< HEAD
    public void click_entr(View view) {
        Intent act_entr = new Intent(MainActivity.this, com.example.startpage.EnterActivity.class);
        startActivity(act_entr);
    }

    public void click_rgstr(View view) {
        Intent act_rgstr = new Intent(MainActivity.this, RegistrationActivity.class);
        startActivity(act_rgstr);
=======
    public void onClickEnterButton(View view) {
        Intent enterActivity = new Intent(MainActivity.this, EnterActivity.class);
        startActivity(enterActivity);
    }

    public void onClickRegButton(View view) {
        Intent regActivity = new Intent(MainActivity.this, RegistrationActivity.class);
        startActivity(regActivity);
>>>>>>> fb969cfb90bbf798777ffbb4d1b5d0c8eeddc043
    }
}