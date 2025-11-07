import { test, expect } from '@playwright/test';

test('login incorrect', async ({ page }) => {
  await page.goto('http://yarsi-baru.test/admin/login');
  await page.getByRole('textbox', { name: 'Email address*' }).click();
  await page.getByRole('textbox', { name: 'Email address*' }).fill('test@test.com');
  await page.getByRole('textbox', { name: 'Email address*' }).press('Tab');
  await page.getByRole('textbox', { name: 'Password*' }).click();
  await page.getByRole('textbox', { name: 'Password*' }).fill('password');
  await page.getByRole('button', { name: 'Sign in' }).click();
  await page.getByText('These credentials do not');
});

test('login correct', async ({ page }) => {
await page.goto('http://yarsi-baru.test/admin/login');
await page.getByRole('textbox', { name: 'Email address*' }).click();
await page.getByRole('textbox', { name: 'Email address*' }).fill('test@example.com');
await page.getByRole('textbox', { name: 'Email address*' }).press('Tab');
await page.getByRole('textbox', { name: 'Password*' }).fill('password');
await page.getByRole('button', { name: 'Sign in' }).click();
await page.getByRole('button', { name: 'User menu' }).click();
await page.getByRole('link', { name: 'Profile' }).click();
await page.getByRole('textbox', { name: 'Name*' }).click();
});

